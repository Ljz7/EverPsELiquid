<?php
/**
 * Project : EverPsELiquid
 * @author Team-Ever
 * @link https://www.team-ever.com/
 * @copyright Team-Ever
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 */

if (!defined('_PS_VERSION_'))
    exit;

class EverPsELiquid extends Module {

    public function __construct()
    {
        $this->name = 'everpseliquid' ;
        $this->tab = 'front_office_features';
        $this->version = '0.1';
        $this->author = 'Team-Ever';

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('EverPsELiquid');
        $this->description = $this->l('Calcule Boost and Base for Eliquid');
        $this->confirmUninstall = $this->l('Are you sure you want to delete these details?');
    }

    public function install()
    {
        return parent::install()
			&& $this->registerHook('header')
			&& $this->registerHook('DisplayHome');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

	public function hookHeader()
	{
		$this->context->controller->addJS($this->_path.'/views/js/everpseliquid.js', 'all');
	}
	
	public function hookDisplayHome()
	{
		return $this->display(__FILE__, 'everpseliquid.tpl');
	}
}
