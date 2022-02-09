<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_metrics.presenter.store.context' shared service.

return $this->services['ps_metrics.presenter.store.context'] = new \PrestaShop\Module\Ps_metrics\Presenter\Store\Context\ContextPresenter(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->load('getPsMetrics_ModuleService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.context.prestashop']) ? $this->services['ps_metrics.context.prestashop'] : ($this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_accounts.facade']) ? $this->services['ps_accounts.facade'] : $this->load('getPsAccounts_FacadeService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.adapter.link']) ? $this->services['ps_metrics.adapter.link'] : $this->load('getPsMetrics_Adapter_LinkService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.repository.configuration']) ? $this->services['ps_metrics.repository.configuration'] : $this->load('getPsMetrics_Repository_ConfigurationService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.provider.shops']) ? $this->services['ps_metrics.provider.shops'] : $this->load('getPsMetrics_Provider_ShopsService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.provider.analyticsaccountslist']) ? $this->services['ps_metrics.provider.analyticsaccountslist'] : $this->load('getPsMetrics_Provider_AnalyticsaccountslistService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.api.http']) ? $this->services['ps_metrics.api.http'] : $this->load('getPsMetrics_Api_HttpService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.tools']) ? $this->services['ps_metrics.helper.tools'] : ($this->services['ps_metrics.helper.tools'] = new \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.db']) ? $this->services['ps_metrics.helper.db'] : $this->load('getPsMetrics_Helper_DbService.php')) && false ?: '_'});
