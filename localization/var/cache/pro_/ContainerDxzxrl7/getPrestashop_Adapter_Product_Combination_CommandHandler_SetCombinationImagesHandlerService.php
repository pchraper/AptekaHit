<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.combination.command_handler.set_combination_images_handler' shared service.

return $this->services['prestashop.adapter.product.combination.command_handler.set_combination_images_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler\SetCombinationImagesHandler(${($_ = isset($this->services['prestashop.adapter.product.combination.update.combination_images_updater']) ? $this->services['prestashop.adapter.product.combination.update.combination_images_updater'] : $this->load('getPrestashop_Adapter_Product_Combination_Update_CombinationImagesUpdaterService.php')) && false ?: '_'});
