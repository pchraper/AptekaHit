<?php
/* Smarty version 3.1.39, created on 2022-02-09 09:44:11
  from 'D:\xampp\htdocs\aptekahit_sklep\themes\bizkick\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62037edb24f570_50910862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7242ffb4db712362fd00e75fc22f76e836d92c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\aptekahit_sklep\\themes\\bizkick\\templates\\page.tpl',
      1 => 1644395763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62037edb24f570_50910862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195860492662037edb244504_79854725', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_28565840562037edb245920_23450988 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_54218654062037edb244e41_16724788 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28565840562037edb245920_23450988', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_207622630062037edb24c472_14885095 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_32378175462037edb24cc08_15870649 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15648713262037edb24bc51_82062361 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207622630062037edb24c472_14885095', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32378175462037edb24cc08_15870649', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_62338949962037edb24e131_29256336 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_121306016462037edb24d9f6_76870009 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62338949962037edb24e131_29256336', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_195860492662037edb244504_79854725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_195860492662037edb244504_79854725',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_54218654062037edb244e41_16724788',
  ),
  'page_title' => 
  array (
    0 => 'Block_28565840562037edb245920_23450988',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15648713262037edb24bc51_82062361',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_207622630062037edb24c472_14885095',
  ),
  'page_content' => 
  array (
    0 => 'Block_32378175462037edb24cc08_15870649',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_121306016462037edb24d9f6_76870009',
  ),
  'page_footer' => 
  array (
    0 => 'Block_62338949962037edb24e131_29256336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54218654062037edb244e41_16724788', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15648713262037edb24bc51_82062361', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121306016462037edb24d9f6_76870009', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
