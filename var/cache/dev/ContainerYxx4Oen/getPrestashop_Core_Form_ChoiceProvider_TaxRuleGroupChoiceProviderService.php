<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.tax_rule_group_choice_provider' shared service.

return $this->services['prestashop.core.form.choice_provider.tax_rule_group_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\TaxRuleGroupChoiceProvider(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->country->id, ($this->services['prestashop.adapter.tax_rules_group.repository.tax_rules_group_repository'] ?? $this->load('getPrestashop_Adapter_TaxRulesGroup_Repository_TaxRulesGroupRepositoryService.php')), ($this->services['prestashop.adapter.tax.tax_computer'] ?? $this->load('getPrestashop_Adapter_Tax_TaxComputerService.php')));