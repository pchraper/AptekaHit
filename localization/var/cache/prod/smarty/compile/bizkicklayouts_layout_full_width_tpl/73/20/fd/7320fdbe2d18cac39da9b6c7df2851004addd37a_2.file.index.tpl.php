<?php
/* Smarty version 3.1.39, created on 2022-02-09 09:44:11
  from 'D:\xampp\htdocs\aptekahit_sklep\themes\bizkick\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62037edb1b3604_32666976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7320fdbe2d18cac39da9b6c7df2851004addd37a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\aptekahit_sklep\\themes\\bizkick\\templates\\index.tpl',
      1 => 1644395763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62037edb1b3604_32666976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145376203662037edb1b14a5_43474723', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_7266274862037edb1b1863_50696299 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_155559652862037edb1b22c9_54559755 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_64545795162037edb1b1e11_92162972 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155559652862037edb1b22c9_54559755', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_145376203662037edb1b14a5_43474723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_145376203662037edb1b14a5_43474723',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7266274862037edb1b1863_50696299',
  ),
  'page_content' => 
  array (
    0 => 'Block_64545795162037edb1b1e11_92162972',
  ),
  'hook_home' => 
  array (
    0 => 'Block_155559652862037edb1b22c9_54559755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7266274862037edb1b1863_50696299', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64545795162037edb1b1e11_92162972', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
