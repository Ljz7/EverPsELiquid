<?php
/**
 * Project : Module Name
 * @author Team-Ever
 * @link https://www.team-ever.com/
 * @copyright Team-Ever
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 */

if (!defined('_PS_VERSION_'))
    exit;

class ModuleName extends Module {

    public function __construct()
    {
        $this->name = 'modulename' ;
        $this->tab = 'front_office_features';
        $this->version = '0.1';
        $this->author = 'Team-Ever';

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Module name');
        $this->description = $this->l('Module short description');
        $this->confirmUninstall = $this->l('Are you sure you want to delete these details?');
    }

    public function install()
    {
        return parent::install();
    }

    public function uninstall()
    {
        return parent::uninstall();
    }
}
