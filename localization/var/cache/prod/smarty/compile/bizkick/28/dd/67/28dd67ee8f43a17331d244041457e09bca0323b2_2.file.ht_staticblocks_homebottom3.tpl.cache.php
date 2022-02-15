<?php
/* Smarty version 3.1.39, created on 2022-02-09 09:44:12
  from 'D:\xampp\htdocs\aptekahit_sklep\modules\ht_staticblocks\views\templates\hook\ht_staticblocks_homebottom3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62037edc4dd344_78980925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28dd67ee8f43a17331d244041457e09bca0323b2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\aptekahit_sklep\\modules\\ht_staticblocks\\views\\templates\\hook\\ht_staticblocks_homebottom3.tpl',
      1 => 1644395762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62037edc4dd344_78980925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '69232995062037edc4da5c8_73466506';
?>

<!-- Static Block module -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_list']->value, 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['content']))) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['content'],'quotes','UTF-8' ));?>

	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /Static block module --><?php }
}
