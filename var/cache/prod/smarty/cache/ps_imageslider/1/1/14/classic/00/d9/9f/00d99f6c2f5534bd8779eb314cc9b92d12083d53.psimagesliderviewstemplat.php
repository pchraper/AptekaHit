<?php
/* Smarty version 3.1.39, created on 2022-02-15 14:40:05
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620bad35005922_83905077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1644928259,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_620bad35005922_83905077 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Carousel container">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://recomed-baner">
            <figure>
              <img src="http://localhost/aptekahit_sklep/modules/ps_imageslider/images/0534bd6fb4c54497de30e6ec496ea4a3b5fd3e19_61a8c3ce27586_recomed-1320x495-wersjapoprawiona.jpg" alt="recomed-baner" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">recomed-baner</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://bodymax-tonik-baner">
            <figure>
              <img src="http://localhost/aptekahit_sklep/modules/ps_imageslider/images/269385674083a786aeb6b2c45e4d5237eb2ff7fe_61e51de4be584_bodymax-tonik-baner-1320x495-min.jpg" alt="bodymax-tonik-baner" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">bodymax-tonik-baner</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Poprzedni">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Następny">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
