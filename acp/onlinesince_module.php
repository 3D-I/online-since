<?php
/**
*
* @package Online Since 1.1.0
* @copyright (c) 2005 - 2016 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace threedi\onlinesince\acp;

class onlinesince_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $config, $request, $template, $user, $phpEx, $phpbb_root_path;

		$user->add_lang('acp/common');

		$this->tpl_name = 'online_since_acp';

		$this->page_title = $user->lang['ACP_ONLINE_SINCE_PAGE_TITLE'];

		add_form_key('online_since_settings');

		// Not yet in use but skeleton ready
		$error = array();

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('online_since_settings'))
			{
				trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}
			$config->set('onlinesince_startdate', $request->variable('onlinesince_startdate', 0));
			$config->set('onlinesince_startdate_reset', $request->variable('onlinesince_startdate_reset', 0));
			$config->set('onlinesince_restore', $request->variable('onlinesince_restore', 0));
			$config->set('onlinesince_gfx', $request->variable('onlinesince_gfx', 0));

			trigger_error($user->lang['ONLINESINCE_SAVED'] . adm_back_link($this->u_action));
		}
		/* there are conditions to satisfy */
		$os_start	= (!empty($config['onlinesince_startdate'])) ? ((int) ($config['onlinesince_startdate'])) : '';
		$os_start_preg	= (preg_match('/^[1-9][0-9]{0,12}$/', $os_start));
		$reset		= (!empty($config['onlinesince_startdate_reset'])) ? true : false;
		$restore	= (!empty($config['onlinesince_restore'])) ? true : false;

		/* let's check for only numbers, no spaces nor anything else than that - max 12 digits. */
		if ($os_start_preg)
		{
			$config->set('onlinesince_startdate', (int) $os_start);
		}
		// If not integers are submitted then return to the board start date
		else if (!$os_start_preg)
		{
			$config->set('onlinesince_startdate', (int) $config['board_startdate']);
		}

		// resets the board start date to now.
		if ($reset)
		{
			$config->set('onlinesince_startdate', (int) time());
		}

		// restores the original board start date
		if ($restore)
		{
			$config->set('onlinesince_startdate', (int) $config['board_startdate']);
		}

		// Shows in a humal legible format the date saved into the config into the template
		$os_board_startdate = $user->format_date($config['onlinesince_startdate'], 'd m Y') . $user->lang['ONLINE_AT'] . $user->format_date($config['onlinesince_startdate'], 'H:i');

		// template stuffs, as usual
		$template->assign_vars(array(
			'ERROR_MSG'				=> implode('<br />', $error),

			'L_OS_BOARD_START'				=> $os_board_startdate,

			'ONLINESINCE_STARTDATE'			=> (!empty($config['onlinesince_startdate'])) ? ((int) ($config['onlinesince_startdate'])) : '',
			'ONLINE_SINCE_STARTDATE_RESET'	=> (!empty($config['onlinesince_startdate_reset'])) ? true : false,
			'ONLINESINCE_RESTORE'			=> (!empty($config['onlinesince_restore'])) ? true : false,
			'ONLINESINCE_GFX'				=> (!empty($config['onlinesince_gfx'])) ? true : false,

			'S_OS_GFX'						=> $config['onlinesince_gfx'],

			'U_ACTION'						=> $this->u_action,
		));
	}
}
