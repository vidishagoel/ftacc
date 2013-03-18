<?php
/**********************************************************************
    Copyright (C) FrontAccounting, LLC.
	Released under the terms of the GNU General Public License, GPL, 
	as published by the Free Software Foundation, either version 3 
	of the License, or (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
    See the License here <http://www.gnu.org/licenses/gpl-3.0.html>.
***********************************************************************/
class setup_app extends application
{
	function setup_app()
	{
		$this->application("system", _($this->help_context = "S&etup"));

		$this->add_module(_("Company Setup"));
		$this->add_lapp_function(0, _("&Company Setup"),
			 'SA_SETUPCOMPANY', MENU_SETTINGS);
		$this->add_lapp_function(0, _("&User Accounts Setup"),
			 'SA_USERS', MENU_SETTINGS);
		$this->add_lapp_function(0, _("&Access Setup"),
			'SA_SECROLES', MENU_SETTINGS);
		$this->add_lapp_function(0, _("&Display Setup"),
			"admin/display_prefs.php?", 'SA_SETUPDISPLAY', MENU_SETTINGS);
		$this->add_lapp_function(0, _("&Forms Setup"),
			'SA_FORMSETUP', MENU_SETTINGS);
		$this->add_rapp_function(0, _("&Taxes"),
			'SA_TAXRATES', MENU_MAINTENANCE);
		$this->add_rapp_function(0, _("Tax &Groups"),
			 'SA_TAXGROUPS', MENU_MAINTENANCE);
		$this->add_rapp_function(0, _("Item Ta&x Types"),
			 'SA_ITEMTAXTYPE', MENU_MAINTENANCE);
		$this->add_rapp_function(0, _("System and &General GL Setup"),
			 'SA_GLSETUP', MENU_SETTINGS);
		$this->add_rapp_function(0, _("&Fiscal Years"),
			 'SA_FISCALYEARS', MENU_MAINTENANCE);
		$this->add_rapp_function(0, _("&Print Profiles"),
			 'SA_PRINTPROFILE', MENU_MAINTENANCE);

		$this->add_module(_("Miscellaneous"));
		$this->add_lapp_function(1, _("Pa&yment Terms"),
			 'SA_PAYTERMS', MENU_MAINTENANCE);
		$this->add_lapp_function(1, _("Shi&pping Company"),
			 'SA_SHIPPING', MENU_MAINTENANCE);
		$this->add_rapp_function(1, _("&Points of Sale"),
			 'SA_POSSETUP', MENU_MAINTENANCE);
		$this->add_rapp_function(1, _("&Printers"),
		'SA_PRINTERS', MENU_MAINTENANCE);
		$this->add_rapp_function(1, _("Contact &Categories"),
			 'SA_CRMCATEGORY', MENU_MAINTENANCE);

		$this->add_module(_("Maintenance"));
		$this->add_lapp_function(2, _("&Void a Transaction"),
			 'SA_VOIDTRANSACTION', MENU_MAINTENANCE);
		$this->add_lapp_function(2, _("View or &Print Transactions"),
			 'SA_VIEWPRINTTRANSACTION', MENU_MAINTENANCE);
		$this->add_lapp_function(2, _("&Attach Documents"),
			 'SA_ATTACHDOCUMENT', MENU_MAINTENANCE);
		$this->add_lapp_function(2, _("System &Diagnostics"),
			 'SA_OPEN', MENU_SYSTEM);

		$this->add_rapp_function(2, _("&Backup and Restore"),
			 'SA_BACKUP', MENU_SYSTEM);
		$this->add_rapp_function(2, _("Create/Update &Companies"),
			 'SA_CREATECOMPANY', MENU_UPDATE);
		$this->add_rapp_function(2, _("Install/Update &Languages"),
			 'SA_CREATELANGUAGE', MENU_UPDATE);
		$this->add_rapp_function(2, _("Install/Activate &Extensions"),
			 'SA_CREATEMODULES', MENU_UPDATE);
		$this->add_rapp_function(2, _("Install/Activate &Themes"),
			'SA_CREATEMODULES', MENU_UPDATE);
		$this->add_rapp_function(2, _("Install/Activate &Chart of Accounts"),
			 'SA_CREATEMODULES', MENU_UPDATE);
		$this->add_rapp_function(2, _("Software &Upgrade"),
			 'SA_SOFTWAREUPGRADE', MENU_UPDATE);

		$this->add_extensions();
	}
}


?>
