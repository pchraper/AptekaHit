<?php
/* Smarty version 3.1.39, created on 2022-02-15 14:40:06
  from 'D:\xampp\htdocs\aptekahit_sklep\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620bad367d3b48_40371376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa3642dc525b776d0d45fbe3dd9e733d0b758155' => 
    array (
      0 => 'D:\\xampp\\htdocs\\aptekahit_sklep\\themes\\classic\\templates\\page.tpl',
      1 => 1644928263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620bad367d3b48_40371376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2147089827620bad367a9243_19772904', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_692529776620bad367a9a59_35138846 extends Smarty_Internal_Block
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
class Block_1913417723620bad367a9623_78993899 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_692529776620bad367a9a59_35138846', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_2064861250620bad367d22e0_17391428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_517095158620bad367d27d2_52589281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1229945317620bad367d1f32_08481700 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2064861250620bad367d22e0_17391428', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_517095158620bad367d27d2_52589281', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_925867821620bad367d31f1_95516811 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_187144249620bad367d2f08_42527780 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_925867821620bad367d31f1_95516811', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2147089827620bad367a9243_19772904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2147089827620bad367a9243_19772904',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1913417723620bad367a9623_78993899',
  ),
  'page_title' => 
  array (
    0 => 'Block_692529776620bad367a9a59_35138846',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1229945317620bad367d1f32_08481700',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2064861250620bad367d22e0_17391428',
  ),
  'page_content' => 
  array (
    0 => 'Block_517095158620bad367d27d2_52589281',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_187144249620bad367d2f08_42527780',
  ),
  'page_footer' => 
  array (
    0 => 'Block_925867821620bad367d31f1_95516811',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1913417723620bad367a9623_78993899', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1229945317620bad367d1f32_08481700', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187144249620bad367d2f08_42527780', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
