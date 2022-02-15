<?php
/* Smarty version 3.1.39, created on 2022-02-09 09:44:12
  from 'D:\xampp\htdocs\aptekahit_sklep\themes\bizkick\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62037edc6da165_20168145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f47c619e19b5b6702f62f0885e093cf8e09002d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\aptekahit_sklep\\themes\\bizkick\\templates\\_partials\\footer.tpl',
      1 => 1644395763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62037edc6da165_20168145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="newsletter-section">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92409322162037edc6d57b1_84524572', 'hook_footer_before');
?>

        </div>
    </div>
</div>
<div class="footer-container">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114349035162037edc6d62a5_54639166', 'hook_footer');
?>

        </div>
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130070949662037edc6d6b30_77021903', 'hook_footer_after');
?>

        </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="container">
        <div class="footer-bottom-inner">
            <p class="copyright">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99178231362037edc6d7381_74766994', 'copyright_link');
?>

            </p>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterPaymentBlock"),$_smarty_tpl ) );?>

        </div>
    </div>
</div><?php }
/* {block 'hook_footer_before'} */
class Block_92409322162037edc6d57b1_84524572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_92409322162037edc6d57b1_84524572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_114349035162037edc6d62a5_54639166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_114349035162037edc6d62a5_54639166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_130070949662037edc6d6b30_77021903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_130070949662037edc6d6b30_77021903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_99178231362037edc6d7381_74766994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_99178231362037edc6d7381_74766994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <a class="_blank" href="http://www.prestashop.com" target="_blank">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                    </a>
                <?php
}
}
/* {/block 'copyright_link'} */
}
