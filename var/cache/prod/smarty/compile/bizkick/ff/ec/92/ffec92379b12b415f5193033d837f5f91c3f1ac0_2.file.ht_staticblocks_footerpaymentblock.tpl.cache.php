<?php
/* Smarty version 3.1.39, created on 2022-02-09 09:44:12
  from 'D:\xampp\htdocs\aptekahit_sklep\modules\ht_staticblocks\views\templates\hook\ht_staticblocks_footerpaymentblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62037edcd62411_80626506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffec92379b12b415f5193033d837f5f91c3f1ac0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\aptekahit_sklep\\modules\\ht_staticblocks\\views\\templates\\hook\\ht_staticblocks_footerpaymentblock.tpl',
      1 => 1644395762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62037edcd62411_80626506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '31525218862037edcd5f230_31277770';
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
