<?php
/**
* 2007-2019 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2019 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}
class WbCategoryFeature extends Module
{
    private $html;
    private $config;
    private $settings_default;
    private $selected_category;
    protected static $cache_filter_categories;
    private $wb_cat_feature_config;
    public function __construct()
    {
        $this->name = 'wbcategoryfeature';
        $this->tab = 'front_office_features';
        $this->version = '1.1.0';
        $this->author = 'Webibazaar';
        $this->need_instance = 0;
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('WB Category Feature');
        $this->description = $this->l('Show category feature');
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->wb_cat_feature_config = 'WB_CONFIG_CATEGORY_FEATURE';
        $this->settings_default = array(
            'used_slider' => 1,
            'showimg' => 1,
            'showsub' => 1,
            'numbersub' => 2,
            'category' => array(3,6)
        );
        $this->getInitSettings();
    }
    public function getInitSettings()
    {
        $this->config = (array)Tools::jsonDecode(Configuration::get($this->wb_cat_feature_config));
        $this->config = (object)array_merge((array)$this->settings_default, $this->config);
        $this->selected_category = $this->config->category;
    }
    public function install()
    {
        $this->_clearCache('wbcategoryfeature.tpl');
        if (!parent::install() ||
            !$this->registerHook('categoryUpdate') ||
            !$this->registerHook('displayHome')) {
            return false;
        }
        if (!Configuration::hasKey($this->wb_cat_feature_config)) {
            Configuration::updateValue($this->wb_cat_feature_config, '');
        }
        return true;
    }
    public function uninstall()
    {
        $this->_clearCache('wbcategoryfeature.tpl');
        if (parent::uninstall() == false || !Configuration::deleteByName($this->wb_cat_feature_config)) {
            return false;
        }
        return true;
    }
    
    public function getContent()
    {
        $this->postProcess();
        $this->initForm();
        return $this->html;
    }
        
    public function checkValidate()
    {
        $configs = Tools::getValue('config');
        $errors = array();
        foreach ($configs as $key_option => $value_option) {
            $pos = strpos($key_option, 'number_');
            if ($pos !== false) {
                if (isset($value_option) && (!$value_option || $value_option <= 0 || !Validate::isInt($value_option))) {
                    $errors[] = $this->l('An invalid '.$key_option.' has been specified.');
                }
            }
        }
        return $errors;
    }
    public function postProcess()
    {
        if (Tools::isSubmit('saveConfig')) {
            $errors = $this->checkValidate();
            if (isset($errors) && count($errors)) {
                $this->html .= $this->displayError(implode('<br />', $errors));
            } else {
                $config = Tools::jsonEncode(Tools::getValue('config'));
                if ($config) {
                    Configuration::updateValue($this->wb_cat_feature_config, $config);
                    $this->_clearCache('wbcategoryfeature.tpl');
                    Tools::redirectAdmin(
                        $this->context->link->getAdminLink(
                            'AdminModules',
                            false
                        ).'&configure='.$this->name.'&token='.Tools::getAdminTokenLite(
                            'AdminModules'
                        ).'&successConfirmation'
                    );
                }
            }
        } elseif (Tools::isSubmit('successConfirmation')) {
            $this->html .= $this->displayConfirmation($this->l('Your settings have been updated.'));
        }
    }
    public function initForm()
    {
        $fields_form = array();
        include(dirname(__FILE__).'/class/settings.php');
        $this->fields_form[0]['form'] = $fields_form;
        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->identifier = $this->identifier;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        foreach (Language::getLanguages(false) as $lang) {
            $helper->languages[] = array(
                'id_lang' => $lang['id_lang'],
                'iso_code' => $lang['iso_code'],
                'name' => $lang['name'],
                'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
            );
        }
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name;
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->toolbar_scroll = true;
        $helper->title = $this->displayName;
        $helper->submit_action = 'saveConfig';
        if (Tools::getIsset('config')) {
            $this->config = (object)array_merge(Tools::getValue('config'), (array)$this->config);
        }
        foreach ($this->fields_form[0]['form']['input'] as $field) {
            $option = str_replace('config[', '', $field['name']);
            $option = str_replace(']', '', $option);
            $helper->fields_value[''.$field['name'].''] = (isset($this->config->$option) ? $this->config->$option : '');
        }
        $this->html .= $helper->generateForm($this->fields_form);
    }
    public function callGetCategoryList($id_lang)
    {
        if (!isset($this->config->category) || empty($this->config->category)) {
            return;
        }
        $categories = array();
        //print_r($this->config->category);
        foreach ($this->config->category as $key => $id_cat) {
            $category = new Category($id_cat, $id_lang);
            // Winter Infotech 28-05-2020 Solve 500 Error wbcategoryfeature Module
            if(isset($category->id)) {
                // Winter Infotech Start 23-04-2019
                $productCount = $category->getProducts($id_lang, 1, 10000, null, null, true);
                $categories[$key]['num_product'] =$productCount;
                // Winter Infotech END
                $categories[$key]['category'] = $category;
                $categories[$key]['sub_cat'] = $category->getSubCategories($id_lang);
                $categories[$key]['cat_thumb'] = (file_exists(_PS_CAT_IMG_DIR_.$category->id_category.'.jpg')) ? 1 : 0;
            }
        }
        return $categories;
    }
   
    
    public function hookDisplayHome()
    {
        $id_lang = (int)$this->context->language->id;
        $iso_code = $this->context->language->iso_code;
        $categories = $this->callGetCategoryList($id_lang);
        $this->context->smarty->assign(array(
            'wb_categories' => $categories,
            'wbconfig' => $this->config,
            'iso_code' => $iso_code,
            'path_ssl' => $this->context->link->getBaseLink()
        ));
        return $this->display(__FILE__, 'wbcategoryfeature.tpl', $this->getCacheId('wbcategoryfeature'));
    }
    public function hookDisplayTopHome()
    {
        return $this->hookDisplayHome();
    }
    public function hookDisplayBottomHome()
    {
        return $this->hookDisplayHome();
    }
    public function hookCategoryUpdate()
    {
        $this->_clearCache('wbcategoryfeature.tpl');
    }
}