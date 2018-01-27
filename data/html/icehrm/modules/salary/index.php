<?php
/*
This file is part of iCE Hrm.

iCE Hrm is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

iCE Hrm is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with iCE Hrm. If not, see <http://www.gnu.org/licenses/>.

------------------------------------------------------------------

Original work Copyright (c) 2012 [Gamonoid Media Pvt. Ltd]  
Developer: Thilina Hasantha (thilina.hasantha[at]gmail.com / facebook.com/thilinah)
 */
 
$moduleName = 'salary';
define('MODULE_PATH',dirname(__FILE__));
include APP_BASE_PATH.'header.php';
include APP_BASE_PATH.'modulejslibs.inc.php';
?><div class="span9">
			  
	<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
		<li class="active"><a id="tabEmployeeSalary" href="#tabPageEmployeeSalary"><?=t('Salary')?></a></li>
	</ul>
	 
	<div class="tab-content">
		<div class="tab-pane active" id="tabPageEmployeeSalary">
			<div id="EmployeeSalary" class="reviewBlock" data-content="List" style="padding-left:5px;">
		
			</div>
			<div id="EmployeeSalaryForm" class="reviewBlock" data-content="Form" style="padding-left:5px;display:none;">
		
			</div>
		</div>
	</div>

</div>
<script>
var modJsList = new Array();

modJsList['tabEmployeeSalary'] = new EmployeeSalaryAdapter('EmployeeSalary');

<?php if(isset($modulePermissions['perm']['Add Salary']) && $modulePermissions['perm']['Add Salary'] == "No"){?>
modJsList['tabEmployeeSalary'].setShowAddNew(false);
<?php }?>
<?php if(isset($modulePermissions['perm']['Delete Salary']) && $modulePermissions['perm']['Delete Salary'] == "No"){?>
modJsList['tabEmployeeSalary'].setShowDelete(false);
<?php }?>
<?php if(isset($modulePermissions['perm']['Edit Salary']) && $modulePermissions['perm']['Edit Salary'] == "No"){?>
modJsList['tabEmployeeSalary'].setShowEdit(false);
<?php }?>

var modJs = modJsList['tabEmployeeSalary'];

</script>
<?php include APP_BASE_PATH.'footer.php';?>      
