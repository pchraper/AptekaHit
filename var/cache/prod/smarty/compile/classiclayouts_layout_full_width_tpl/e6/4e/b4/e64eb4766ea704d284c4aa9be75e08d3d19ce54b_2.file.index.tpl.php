<?php
/* Smarty version 3.1.39, created on 2022-02-15 14:40:06
  from 'D:\xampp\htdocs\aptekahit_sklep\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620bad3672b519_92719748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64eb4766ea704d284c4aa9be75e08d3d19ce54b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\aptekahit_sklep\\themes\\classic\\templates\\index.tpl',
      1 => 1644928263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620bad3672b519_92719748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1293236405620bad36729a80_48559558', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1251026673620bad36729e82_96709228 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1144862705620bad3672a765_34116644 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_223062184620bad3672a453_56940058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1144862705620bad3672a765_34116644', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1293236405620bad36729a80_48559558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1293236405620bad36729a80_48559558',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1251026673620bad36729e82_96709228',
  ),
  'page_content' => 
  array (
    0 => 'Block_223062184620bad3672a453_56940058',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1144862705620bad3672a765_34116644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1251026673620bad36729e82_96709228', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_223062184620bad3672a453_56940058', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
