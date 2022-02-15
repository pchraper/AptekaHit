<?php
/* Smarty version 3.1.39, created on 2022-02-09 09:44:10
  from 'module:psnewproductsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62037edac3fd55_40525096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8df44403a47041b050fac755e17268c2a7c3e7' => 
    array (
      0 => 'module:psnewproductsviewstemplat',
      1 => 1644395763,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_62037edac3fd55_40525096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '33665479362037edac073b0_31985309';
?>

<section class="featured-products clearfix mt-3">
    <div class="container">
        <div class="product-section-title">
            <h1 class="h1 products-section-title text-uppercase">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

            </h1>
        </div>
        <div class="products-grid">
            <div class="row">
                <div class="products owl-theme owl-carousel product-slider">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php }
}
