<?php
/**
*
* @package Online Since
* @copyright (c) 2015 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace threedi\onlinesince\acp;

class onlinesince_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container, $user;

		$this->tpl_name		= 'online_since_acp';
		$this->page_title	= $user->lang('ACP_ONLINE_SINCE_PAGE_TITLE');

		/* borrowed from david63/cookiepolicy */

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('threedi.onlinesince.admin.controller');

		$admin_controller->onlinesince_settings();

		// Make the $u_action url available in the admin controller
		$admin_controller->set_page_url($this->u_action);
	}
}
