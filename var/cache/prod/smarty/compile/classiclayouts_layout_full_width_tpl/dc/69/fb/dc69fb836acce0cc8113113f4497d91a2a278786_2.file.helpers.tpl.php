<?php
/* Smarty version 3.1.39, created on 2022-02-15 14:40:06
  from 'D:\xampp\htdocs\aptekahit_sklep\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620bad36bc59c8_72445392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc69fb836acce0cc8113113f4497d91a2a278786' => 
    array (
      0 => 'D:\\xampp\\htdocs\\aptekahit_sklep\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1644928264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620bad36bc59c8_72445392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\aptekahit_sklep\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\dc\\69\\fb\\dc69fb836acce0cc8113113f4497d91a2a278786_2.file.helpers.tpl.php',
    'uid' => 'dc69fb836acce0cc8113113f4497d91a2a278786',
    'call_name' => 'smarty_template_function_renderLogo_16161512620bad36b6e111_47392207',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_16161512620bad36b6e111_47392207 */
if (!function_exists('smarty_template_function_renderLogo_16161512620bad36b6e111_47392207')) {
function smarty_template_function_renderLogo_16161512620bad36b6e111_47392207(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      loading="lazy"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_16161512620bad36b6e111_47392207 */
}
