<?php
/* Smarty version 3.1.39, created on 2022-02-09 09:46:42
  from 'D:\xampp\htdocs\aptekahit_sklep\modules\ps_themecusto\views\templates\admin\controllers\configuration\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62037f72b32f49_85325820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27519122dd135c89b679e4e4301cb1a1388bf304' => 
    array (
      0 => 'D:\\xampp\\htdocs\\aptekahit_sklep\\modules\\ps_themecusto\\views\\templates\\admin\\controllers\\configuration\\index.tpl',
      1 => 1611045660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./ps_ready.tpl' => 1,
    'file:./dropdownList.tpl' => 3,
    'file:./elem/modal.tpl' => 1,
  ),
),false)) {
function content_62037f72b32f49_85325820 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="psthemecusto" class="container-fluid clearfix">
    <?php if ($_smarty_tpl->tpl_vars['isPsReady']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:./ps_ready.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <div class="panel row">
        <div class="panel-heading text-center">
            <button class="btn btn-primary btn-lg selected" data-id-modal="homepageModal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Homepage','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</button>
            <button class="btn btn-primary btn-lg" data-id-modal="categoryModal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category page','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</button>
            <button class="btn btn-primary btn-lg" data-id-modal="productModal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product page','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</button>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:./dropdownList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('elementsList'=>$_smarty_tpl->tpl_vars['homePageList']->value,'idModal'=>'homepage','defaultModalClass'=>''), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./dropdownList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('elementsList'=>$_smarty_tpl->tpl_vars['categoryPageList']->value,'idModal'=>'category','defaultModalClass'=>'hide'), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./dropdownList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('elementsList'=>$_smarty_tpl->tpl_vars['productPageList']->value,'idModal'=>'product','defaultModalClass'=>'hide'), 0, true);
?>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:./elem/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php }
}
