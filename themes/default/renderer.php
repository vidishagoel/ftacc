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
 echo"<link rel='stylesheet' type='text/css' href='css/bootstrap.css'/>";//change
echo"<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>";//change
	
	echo"<script src='js/bootstrap.js'></script>";//change

	class renderer
	{
		function get_icon($category)
		{
			global  $path_to_root, $show_menu_category_icons;

			if ($show_menu_category_icons)
				$img = $category == '' ? 'right.gif' : $category.'.png';
			else	
				$img = 'right.gif';
			return "<img src='$path_to_root/themes/default/images/$img' style='vertical-align:middle;' border='0'>&nbsp;&nbsp;";
		}

		function wa_header()
		{
			page(_($help_context = "Main Menu"), false, true);
		}

		function wa_footer()
		{
			end_page(false, true);
		}

		function menu_header($title, $no_menu, $is_index)
		{
		
			global $path_to_root, $help_base_url, $db_connections, $show_inaccessible_menu_items;
			echo "<table class='callout_main' border='0' cellpadding='0' cellspacing='0'>\n";
			echo "<tr>\n";
			echo "<td colspan='2' rowspan='2'>\n";

			echo "<table class='main_page' border='0' cellpadding='0' cellspacing='0'>\n";
			echo "<tr>\n";
			echo "<td>\n";
			echo "<table width='100%' border='0' cellpadding='0' cellspacing='0'>\n";
			echo "<tr>\n";
			echo "<td class='quick_menu'>\n";
			if (!$no_menu)
			{
				
				$applications = $_SESSION['App']->applications;
				$local_path_to_root = $path_to_root;
				$img = "<img src='$local_path_to_root/themes/default/images/login.gif' width='14' height='14' border='0' alt='"._('Logout')."'>&nbsp;&nbsp;";
				$himg = "<img src='$local_path_to_root/themes/default/images/help.gif' width='14' height='14' border='0' alt='"._('Help')."'>&nbsp;&nbsp;";
				$sel_app = $_SESSION['sel_app'];
				echo "<table cellpadding=0 cellspacing=0 width='100%'><tr><td>";
				echo "<div class=''>";//change
				//echo "<ul class='nav nav-tabs'>";
echo "<html lang='en'>";
				echo "<head>";
				echo "<title>Front Accounting Menu</title>";
				echo"</head>";
				echo"<body bgcolor='#FF0000'>";
				 echo"<div class='navbar'>";
				//echo"<div class='navbar-inner'>";
				echo"<div class='container'>";
				//echo"<ul class='nav nav-tabs'><div class='navbar'>";
				echo"<div class='navbar-inner'>";
				echo"<div class='container'>";
				echo"<ul class='nav nav-pills'>";
				
				echo"<li class='dropdown'><!--sales begin!-->";
				echo"<a class='dropdown-toggle' data-toggle='dropdown' href='customers.php'>";
				echo "Sales <b class='caret'></b></a>";
				echo"<ul class='dropdown-menu'>";
				echo"<li class='dropdown-submenu'>";
				echo"<a tabindex='-1' href='#'>Transaction</a>";
				echo" <ul class='dropdown-menu'>";
				echo"</li>";
				echo"<li><a href='#'>Sales Order Entry</a></li>";
				echo"<li><a href='#'>Direct Delivery</a></li>";
				echo"<li><a href='#'> Direct Invoice</a></li>";
				echo"<li><a href='#'>Delivery Against Sales Orders</a></li>";
				echo"<li><a href='#'>Invoice Against Sales Delivery</a></li>";
				echo"<li><a href='#'> Template Delivery</a></li>";
				echo"<li><a href='#'>Create and Print Recurrent Invoices</a></li>";
				echo"<li><a href='#'>Customer Payments</a></li>";
				echo"<li><a href='#'>Customer Credit Notes</a></li>";
				echo"<li><a href='#'>Allocate Customer Payments or Credit Notes</a></li>";
                                echo"</ul>"; 
                            	echo"</li>";	
				echo"<li class='divider'></li>";
				echo"<li class='dropdown-submenu'>";
                            	echo"<a tabindex='-1' href='#'>Inquires and Reports</a>";
				echo"<ul class='dropdown-menu'>";
				echo"<li><a href='#'>Sales Quotation Inquiry</a></li>";
				echo"<li><a href='#'>Sales Order Inquiry</a></li>";
				echo"<li><a href='#'>Customer Transaction Inquiry</a></li>";
				echo"<li><a href='#'>Customer Allocation Inquiry</a></li>";
				echo"<li><a href='#'>Customer and Sales Reports</a></li>";
                                echo "</ul>"; 
 				echo"</li>";
				echo"<li class='divider'></li>";
                          	echo "<li class='dropdown-submenu'>";
                            	echo"<a tabindex='-1' href='#'>Maintainence</a>";
				echo"<ul class='dropdown-menu'>";
				echo"<li><a href='#'>Add and Manage Customers</a></li>";
				echo"<li><a href='#'>Customer Branches</a></li>";
				echo"<li><a href='#'>Sales Groups</a></li>";
				echo"<li><a href='#'>Recurrent Invoices</a></li>";
				echo"<li><a href='#'>Sales Persons</a></li>";
				echo"<li><a href='#'>Sales Areas</a></li>";
				echo"<li><a href='#'>Credit Status Setup</a></li>";
				 echo"</ul>"; 
                           	 echo"</li>";
				echo"</ul>";
				echo"</li>";//end-->";
				echo"<li class='dropdown'><!--Purchase begin!-->";
			    	echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>";
				echo"Purchase <b class='caret'></b>";  
				echo"</a>";
				echo"<ul class='dropdown-menu'>";
				echo"<li class='dropdown-submenu'>";
                            	 echo"<a tabindex='-1' href='#'>Transaction</a>"; 
				echo"<ul class='dropdown-menu'>";
				echo"<li><a href='#'>Purchase Order Entry</a></li>";
				echo"<li><a href='#'>Outstanding Purchase Orders Maintenance</a></li>";
				echo"<li><a href='#'>Direct GRN</a></li>";
				echo"<li><a href='#'>Direct Invoice</a></li>";
				echo"<li><a href='#'>Payments to Suppliers</a></li>";
				echo"<li><a href='#'> Supplier Invoices</a></li>";
				echo"<li><a href='#'>Supplier Credit Notes</a></li>";
				echo"<li><a href='#'>Allocate Supplier Payments or Credit Notes</a></li>";
                                echo"</ul>"; 
                            	echo"</li>";		
				echo"<li class='divider'></li>";
				echo"<li class='dropdown-submenu'>";
                            	echo"<a tabindex='-1' href='#'>Inquires and Reports</a>";
                           	echo"<ul class='dropdown-menu'>";
				echo"<li><a href='#'>Purchase Orders Inquiry</a></li>";
				echo"<li><a href='#'>Supplier Transaction Inquiry</a></li>";
				echo"<li><a href='#'>Supplier Allocation Inquiry</a></li>";
				echo"<li><a href='#'>Supplier and Purchasing Reports</a></li>";
                                echo" </ul>"; 
 				echo" </li>";
				echo"<li class='divider'></li>";
                          	echo "<li class='dropdown-submenu'>";
                            	echo"<a tabindex='-1' href='#'>Maintainence</a>";
				echo"<ul class='dropdown-menu'>";
				echo"<li><a href='#'>Suppliers</a></li>";
				 echo"</ul>"; 
                           	 echo"</li>";
				echo"</ul>";
				echo"</li>";//end
				echo"<li class='dropdown'><!--item and inventory begin!-->";
				echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>";
				echo"Item and Inventory <b class='caret '></b>";
				echo"</a>";
				echo"<ul class='dropdown-menu'>";
				echo"<li class='dropdown-submenu'>";
                            	echo"<a tabindex='-1' href='#'>Transaction</a>"; 
				 echo"<ul class='dropdown-menu'>";
				echo"<li><a href='#'>Inventory Location Transfers</a></li>";
				echo"<li><a href='#'>Inventory Adjustments</a></li>";
                                echo "</ul>"; 
				echo"</li>";		
				echo"<li class='divider'></li>";
				echo"<li class='dropdown-submenu'>";
                            	echo"<a tabindex='-1' href='#'>Inquires and Reports</a>";
                         	echo"<ul class='dropdown-menu'>";
				echo"<li><a href'#'>  Inventory Item Movements</a></li>";
				echo"<li><a href='#'>Inventory Item Status</a></li>";
				echo"<li><a href='#'>Inventory Reports</a></li>";
                                echo"</ul>"; 
                           	echo" </li>";
				echo"<li class='divider'></li>";
                           	echo" <li class='dropdown-submenu'>";
                            	echo"<a tabindex='-1' href='#'>Maintainence</a>";
                               	echo" <ul class='dropdown-menu'>";
				echo"<li><a href='#'>Items</a></li>";
				echo"<li><a href='#'>Foreign Item Codes</a></li>";
				echo"<li><a href='#'>Sales Kits</a></li>";
				echo"<li><a href='#'>Item Categories</a></li>";
				echo"<li><a href='#'>Inventory Locations</a></li>";
				echo"<li><a href='#'>Inventory Movement Types</a></li>";
				echo"<li><a href='#'>Foreign Item Codes</a></li>";
				echo"<li><a href='#'>Units of Measure</a></li>";
				echo"<li><a href='#'>Reorder Levels</a></li>";
                                 echo"</ul>";
				echo" </li>";
				echo"<li class='divider'></li>";
                            	echo"<li class='dropdown-submenu'>";
                            	echo"<a tabindex='-1' href='#'>Pricing and Cost</a>";
                            	echo" <ul class='dropdown-menu'>";
				echo"<li><a href='#'>Sales Pricing</a></li>";
				echo"<li><a href='#'> Purchasing Pricing</a></li>";
				echo"<li><a href='#'>Standard Costs</a></li>";
                                   echo"</ul> ";
                         	 echo"  </li>";
				echo"</ul>";


				echo"</li><!--end-->";
				echo"<li class='dropdown'><!--Manufacturing begin!-->";
				echo"<a class='dropdown-toggle'data-toggle='dropdown'href='#'>";
				echo"Manufacturing <b class='caret'></b>";
			  echo"</a>";
				echo"<ul class=dropdown-menu>";
					echo"<li class='dropdown-submenu'>";
                            	echo"<a tabindex='-1' href='#'>Transaction</a>";                                		
                                    echo"<ul class='dropdown-menu'>";
					echo"<li><a href='#'>Work Order Entry</a></li>";
					echo"<li><a href='#'>Outstanding Work Orders</a></li>";
                                  echo"  </ul>"; 
                           echo" </li>";

						echo"<li class='divider'></li>";
						echo"<li class='dropdown-submenu'>";
                            	echo"<a tabindex='-1' href='#'>Inquires and Reports</a>";
                                		
                                    echo"<ul class='dropdown-menu'>";
				echo"<li><a href='#'>  Costed Bill Of Material Inquiry</a></li>";
				echo"<li><a href='#'>Inventory Item Where Used Inquiry</a></li>";
				echo"<li><a href='#'> Work Order Inquiry</a></li>";
				echo"<li><a href='#'> Manufacturing Reports</a></li>";
                    
                                 echo" </ul>"; 
                            echo"</li>";
		echo"<li class='divider'></li>";
                echo"<li class='dropdown-submenu'>";
                echo"<a tabindex='-1' href='#'>Maintainence</a>";
                                		
                  echo"    <ul class='dropdown-menu'>";
		echo"<li><a href='#'>Bills Of Material</a></li>";
		echo"<li><a href='#'>Work Centres</a></li>";
                    echo"</ul>"; 
                         echo"</li>";
				echo"</ul>";
								
				echo"</li>";//end
			echo"<li class='dropdown'><!--Dimension begin!-->";
			echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>";
			echo"Dimension <b class='caret'></b>";
			echo"</a>";
								
		echo"<ul class='dropdown-menu'>";
		echo"<li class='dropdown-submenu'>";
                 echo"<a tabindex='-1' href='#'>Transaction</a> ";
                       echo"<ul class='dropdown-menu'>";
		echo"<li><a href='#'>Dimension Entry</a></li>";
		echo"<li><a href='#'>Outstanding Dimensions</a></li>";
                  echo" </ul>"; 
                       echo"</li>";		
		echo"<li class='divider'></li>";
	        echo"<li class='dropdown-submenu'>";
                 echo"<a tabindex='-1' href='#'>Inquires and Reports</a>";
                                		
                   echo"<ul class='dropdown-menu'>";
		 echo"<li><a href='#'>  Dimension Inquiry</a></li>";
		echo"<li><a href='#'>Dimension Reports</a></li> ";
                    
                                    echo"</ul>"; 
                            echo"</li>";
		echo"<li class='divider'></li>";
                echo"<li class='dropdown-submenu'>";
                 echo"<a tabindex='-1' href='#'>Maintainence</a>";
                                		
                  echo"<ul class='dropdown-menu'>";
	         echo"<li><a href='#'>Dimension Tags</a></li>";
                   echo"</ul>"; 
                 echo" </li>";
	         echo"</ul>";
								
	       echo"</li>";//<!--end-->
		echo"<li class='dropdown'><!--Banking and General ledger begin!-->";
                 echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>";
	         echo"Banking and General Ledger <b class='caret'></b>";
		echo"</a>";
								
			echo"<ul class='dropdown-menu'>";
			echo"<li class='dropdown-submenu'>";
                           echo"<a tabindex='-1' href='#'>Transaction</a>";
                         echo"<ul class='dropdown-menu'>";
			echo"<li><a href='#'>Payments</a></li>";
		       echo"<li><a href='#'>Deposits</a></li>";
		 echo"<li><a href='#'>Bank Account Transfers</a></li>";
		echo"<li><a href='#'>Journal Entry</a></li>";
		echo"<li><a href='#'>Budget Entry</a></li>";
	  echo"<li><a href='#'>Reconcile Bank Account</a></li>";
                          echo"</ul>"; 
                            echo"</li>";		
			echo"<li class='divider'></li>";
			echo"<li class='dropdown-submenu'>";
                          echo"<a tabindex='-1' href='#'>Inquires and Reports</a>";
                                		
                          echo"<ul class='dropdown-menu'>";
			echo"<li><a href='#'>  Journal Inquiry</a></li>";
			echo"<li><a href='#'>GL Inquiry</a></li>";
			echo"<li><a href='#'>Bank Account Inquiry</a></li>";
		  echo"<li><a href='#'>  Tax Inquiry</a></li>";
		echo"<li><a href='#'>  Trial Balance</a></li>";
		echo"<li><a href='#'>Balance Sheet Drilldown</a></li>";
		echo"<li><a href='#'>  Profit and Loss Drilldown</a></li>";
	        echo"<li><a href='#'>Banking Reports</a></li>";
	        echo"<li><a href='#'> General Ledger Reports</a></li>";
                   echo"</ul> ";
                    echo"</li>";
		   echo"<li class='divider'></li>";
                    echo"<li class='dropdown-submenu'>";
                     echo"<a tabindex='-1' href='#'>Maintainence</a>";
                                		
                       echo"  <ul class='dropdown-menu'>";
		       echo"<li><a href='#'>  Journal Inquiry</a></li>";
		       echo"<li><a href='#'>GL Inquiry</a></li>";
		      echo"<li><a href='#'>Bank Account Inquiry</a></li>";
		      echo"<li><a href='#'>  Tax Inquiry</a></li>";
		     echo"<li><a href='#'>  Trial Balance</a></li>";
		echo"<li><a href='#'>Balance Sheet Drilldown</a></li>";
	      echo"<li><a href='#'>  Profit and Loss Drilldown</a></li>";
	     echo"<li><a href='#'>Banking Reports</a></li>";
	     echo"<li><a href='#'> General Ledger Reports</a></li>";
              echo"</ul> ";
               echo" </li>";
			echo"</ul>";
								
		echo"</li>";//<!--end-->
		echo"<li class='dropdown'>";//<!--Setup begin!-->
		echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>";
	        echo"Setup <b class='caret'></b>";
		echo"</a>";
								
	    echo"<ul class='dropdown-menu'>";
	 echo"<li class='dropdown-submenu pull-left'>";
         echo"<a tabindex='-1' href='#'>Company Setup</a> ";
           echo"<ul class='dropdown-menu '>";
	echo"<li><a href='#'>Company Setup</a></li>";
	echo"<li><a href='#'>User Account Setup</a></li>";
        echo"<li><a href='#'>Access Setup</a></li>";
       echo"<li><a href='#'>Display Setup</a></li>";
       echo"<li><a href='#'>Forms Setup</a></li>";
      echo"<li><a href='#'>Taxes</a></li>";
	echo"<li><a href='#'>Tax Groups</a></li>";
	echo"<li><a href='#'>Item Tax Types</a></li>";
   echo"<li><a href='#'>Standard and General GL Setup</a></li>";
 echo"<li><a href='#'>Fiscal Years</a></li>";
echo"<li><a href='#'>Print Profiles</a></li>";
       echo"</ul>"; 
       echo" </li>";
echo"<li class='divider'></li>";
echo"<li class='dropdown-submenu  pull-left'>";
echo"<a tabindex='-1' href='#'>Miscellaneous</a>";
                                		
    echo"<ul class='dropdown-menu'>";
echo"<li><a href='#'> Payment Terms</a></li>";
echo"<li><a href='#'>Shipping Company</a></li>";
echo"<li><a href='#'>Point of Sales</a></li>";
echo"<li><a href='#'>Printers</a></li>";
echo"<li><a href='#'>Contact Categories</a></li>";
echo"</ul> ";
echo"</li>";
echo"<li class='divider'></li>";
echo"<li class='dropdown-submenu pull-left'>";
echo"<a   href='#'>Maintainence </a>";
echo"<ul class='dropdown-menu'>";
echo"<li><a href='#'> Void A Transaction</a></li>";
echo"<li><a href='#'>View or Print Transaction</a></li>";
echo"<li><a href='#'>Attach Documents</a></li>";
echo"<li><a href='#'> System Dianostics</a></li>";
echo"<li><a href='#'> Backup and Restores</a></li>";
echo"<li><a href='#'>Create/Update Companies</a></li>";
echo"<li><a href='#'>Instal/Update Languages</a></li>";
echo"<li><a href='#'>Install/Activate Extension</a></li>";
echo"<li><a href='#'>Install/Activate Themes</a></li>";
echo"<li><a href='#'>Instal/Activate chart of Accounts</a></li>";
echo"<li><a href='#'>Software Upgrade</a></li>";
echo"</ul> ";
echo"</li>";
echo"</ul>";
								
echo"</li>";
echo"</ul>";
echo"</div>";
echo"</div>";
				
echo"</div>";
echo"</body>";
echo"</html>";
		

		


                                		

				/*foreach($applications as $app)//change(comment the original code)
				{
                    if ($this->check_application_access($app))
                    {
                        $acc = access_string($app->name);
			//echo"<ul class='nav nav-tabs'";
                      echo "<a class='".($sel_app == $app->id ? 'selected' : 'btn ')
                           ."' href='$local_path_to_root/index.php?application=".$app->id
                            ."'$acc[1]>" .$acc[0] . "</a>";
			//echo"</ul>";

                    }
				}
				//echo "</ul>";
				echo "</div>";

				echo "</td></tr></table>";*/
								  




				echo "<table class=logoutBar>";
				echo "<tr><td class=headingtext3>" . $db_connections[$_SESSION["wa_current_user"]->company]["name"] . " | " . $_SERVER['SERVER_NAME'] . " | " . $_SESSION["wa_current_user"]->name . "</td>";
				$indicator = "$path_to_root/themes/".user_theme(). "/images/ajax-loader.gif";
				echo "<td class='logoutBarRight'><img id='ajaxmark' src='$indicator' align='center' style='visibility:hidden;'></td>";
				echo "  <td class='logoutBarRight'><a class='shortcut' href='$path_to_root/admin/display_prefs.php?'>" . _("Preferences") . "</a>&nbsp;&nbsp;&nbsp;\n";
				echo "  <a class='shortcut' href='$path_to_root/admin/change_current_user_password.php?selected_id=" . $_SESSION["wa_current_user"]->username . "'>" . _("Change password") . "</a>&nbsp;&nbsp;&nbsp;\n";

				if ($help_base_url != null)
				{
					echo "$himg<a target = '_blank' onclick=" .'"'."javascript:openWindow(this.href,this.target); return false;".'" '. "href='". help_url()."'>" . _("Help") . "</a>&nbsp;&nbsp;&nbsp;";
				}
				echo "$img<a class='shortcut' href='$local_path_to_root/access/logout.php?'>" . _("Logout") . "</a>&nbsp;&nbsp;&nbsp;";
				echo "</td></tr><tr><td colspan=3>";
				echo "</td></tr></table>";
			}
			echo "</td></tr></table>";

			if ($no_menu)
				echo "<br>";
			elseif ($title && !$is_index)
			{
				echo "<center><table id='title'><tr><td width='100%' class='titletext'>$title</td>"
				."<td align=right>"
				.(user_hints() ? "<span id='hints'></span>" : '')
				."</td>"
				."</tr></table></center>";
			}
		}

		function menu_footer($no_menu, $is_index)
		{
			global $version, $allow_demo_mode, $app_title, $power_url, 
				$power_by, $path_to_root, $Pagehelp, $Ajax;
			include_once($path_to_root . "/includes/date_functions.inc");

			if ($no_menu == false)
			{
				if ($is_index)
					echo "<table class=bottomBar>\n";
				else
					echo "<table class=bottomBar2>\n";
				echo "<tr>";
				if (isset($_SESSION['wa_current_user'])) {
					$phelp = implode('; ', $Pagehelp);
					echo "<td class=bottomBarCell>" . Today() . " | " . Now() . "</td>\n";
					$Ajax->addUpdate(true, 'hotkeyshelp', $phelp);
					echo "<td id='hotkeyshelp'>".$phelp."</td>";
				}
				echo "</tr></table>\n";
			}
			echo "</td></tr></table></td>\n";
			echo "</table>\n";
			if ($no_menu == false)
			{
				echo "<table align='center' id='footer'>\n";
				echo "<tr>\n";
				//echo "<td align='center' class='footer'><a target='_blank' href='$power_url' tabindex='-1'><font color='#ffffff'>$app_title $version - " . _("Theme:") . " " . user_theme() . " - ".show_users_online()."</font></a></td>\n";
				echo "</tr>\n";
				echo "<tr>\n";
				//echo "<td align='center' class='footer'><a target='_blank' href='$power_url' tabindex='-1'><font color='#ffff00'>$power_by</font></a></td>\n";
				echo "</tr>\n";
				if ($allow_demo_mode==true)
				{
					echo "<tr>\n";
					//echo "<td><br><div align='center'><a href='http://sourceforge.net'><img src='http://sourceforge.net/sflogo.php?group_id=89967&amp;type=5' alt='SourceForge.net Logo' width='210' height='62' border='0' align='middle' /></a></div></td>\n";
					echo "</tr>\n";
				}
				echo "</table><br><br>\n";
			}
		}

		function display_applications(&$waapp)
		{
			global $path_to_root;

			$selected_app = $waapp->get_selected_application();
			if (!$this->check_application_access($selected_app))
				return;
			foreach ($selected_app->modules as $module)
			{
        		if (!$this->check_module_access($module))
        			continue;
				// image
				echo "<tr>";
				// values
				echo "<td valign='top' class='menu_group'>";
				echo "<table border=0 width='100%'>";
				echo "<tr><td class='menu_group'>";
				echo $module->name;
				echo "</td></tr><tr>";
				echo "<td class='menu_group_items'>";

				foreach ($module->lappfunctions as $appfunction)
				{
					$img = $this->get_icon($appfunction->category);
					if ($appfunction->label == "")
						echo "&nbsp;<br>";
					elseif ($_SESSION["wa_current_user"]->can_access_page($appfunction->access)) 
					{
							echo $img.menu_link($appfunction->link, $appfunction->label)."<br>\n";
					}
					elseif (!$this->hide_inaccessible_menu_items())
					{
							echo $img.'<span class="inactive">'
								.access_string($appfunction->label, true)
								."</span><br>\n";
					}
				}
				echo "</td>";
				if (sizeof($module->rappfunctions) > 0)
				{
					echo "<td width='50%' class='menu_group_items'>";
					foreach ($module->rappfunctions as $appfunction)
					{
						$img = $this->get_icon($appfunction->category);
						if ($appfunction->label == "")
							echo "&nbsp;<br>";
						elseif ($_SESSION["wa_current_user"]->can_access_page($appfunction->access)) 
						{
								echo $img.menu_link($appfunction->link, $appfunction->label)."<br>\n";
						}
						elseif (!$this->hide_inaccessible_menu_items())
						{
								echo $img.'<span class="inactive">'
									.access_string($appfunction->label, true)
									."</span><br>\n";
						}
					}
					echo "</td>";
				}

				echo "</tr></table></td></tr>";
			}	
			echo "</table>";
		}
        
        function check_application_access($waapp)
        {
            if (!$this->hide_inaccessible_menu_items())
            {
                return true;
            }
            
            foreach ($waapp->modules as $module)
            {
                if ($this->check_module_access($module))
                {
                    return true;
                }
            }
            
            return false;
                    
        }
        
        function check_module_access($module)
        {
            
            if (!$this->hide_inaccessible_menu_items())
            {
                return true;
            }
            
            if (sizeof($module->lappfunctions) > 0)
            {
                foreach ($module->lappfunctions as $appfunction)
                {
                    if ($appfunction->label != "" && $_SESSION["wa_current_user"]->can_access_page($appfunction->access))
                    {
                        return true;
                    }
                }
            }
            
            if (sizeof($module->rappfunctions) > 0)
            {
                foreach ($module->rappfunctions as $appfunction)
                {
                    if ($appfunction->label != "" && $_SESSION["wa_current_user"]->can_access_page($appfunction->access))
                    {
                        return true;
                    }
                }
            }
            
            return false;
            
        }
        
        function hide_inaccessible_menu_items()
        {
            global $hide_inaccessible_menu_items;
            
            if (!isset($hide_inaccessible_menu_items) || $hide_inaccessible_menu_items == 0)
            {
                return false;
            }
            
            else
            {
                return true;
            }
        }
    }
		


?>
