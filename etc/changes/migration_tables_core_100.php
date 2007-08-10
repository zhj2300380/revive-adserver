<?php

/*
+---------------------------------------------------------------------------+
| Openads v2.3                                                              |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2007 Openads Limited                                   |
| For contact details, see: http://www.openads.org/                         |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id: StatMigration.php 7557 2007-06-18 13:03:08Z matteo.beccati@openads.org $
*/

require_once(MAX_PATH.'/lib/OA/Upgrade/Migration.php');

class Migration_100 extends Migration
{

    function Migration_100()
    {
        //$this->__construct();

		$this->aTaskList_constructive[] = 'beforeAddTable__lb_local';
		$this->aTaskList_constructive[] = 'afterAddTable__lb_local';
		$this->aTaskList_constructive[] = 'beforeAddField__clients__lb_reporting';
		$this->aTaskList_constructive[] = 'afterAddField__clients__lb_reporting';


		$this->aObjectMap['clients']['lb_reporting'] = array('fromTable'=>'clients', 'fromField'=>'lb_reporting');
    }



	function beforeAddTable__lb_local()
	{
		return $this->beforeAddTable('lb_local');
	}

	function afterAddTable__lb_local()
	{
		return $this->afterAddTable('lb_local');
	}

	function beforeAddField__clients__lb_reporting()
	{
		return $this->beforeAddField('clients', 'lb_reporting');
	}

	function afterAddField__clients__lb_reporting()
	{
		return $this->afterAddField('clients', 'lb_reporting');
	}

}

?>
