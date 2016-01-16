<?php
/**
*
* @package phpBB Extension - Online Since 1.0.3
*
* @copyright (c) 2005-2008-2016 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace threedi\onlinesince\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use threedi\onlinesince\ext;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/**
		* Constructor
		*
		* @param \phpbb\auth\auth			$auth			Authentication object
		* @param \phpbb\config\config		$config			Config Object
		* @param \phpbb\template\template	$template		Template object
		* @param \phpbb\user				$user			User Object
		* @access public
		*/
	public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user)
	{
			$this->auth = $auth;
			$this->config = $config;
			$this->template = $template;
			$this->user = $user;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'		=> 'load_language_on_setup',
			'core.page_footer'		=> 'display_onlinesince',
			'core.permissions'		=> 'permissions',
		);
	}

	/* Permission's language file is automatically loaded */
	public function permissions($event)
	{
		$permissions = $event['permissions'];
		$permissions += array(
			'u_allow_onlinesince' => array(
				'lang'	=> 'ACL_U_ALLOW_ONLINESINCE',
				'cat'	=> 'misc'
			),
		);
		$event['permissions'] = $permissions;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'threedi/onlinesince',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function display_onlinesince($event)
	{

// NOTE to SELF: put a condition based on permissions in order the code not to be ran, in case.

		$year = date("Y", time());
		$days_of_month = array(
			array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31
			),
			array(0, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31
			)
		);

		$start_date = gmdate('Y-m-d', $this->config['onlinesince_startdate']);
		$today_date = gmdate('Y-m-d', time());

		list($year1, $month1, $day1) = explode('-', $start_date);
		list($year2, $month2, $day2) = explode('-', $today_date);

		$diff_year = $year2 - $year1;
		$diff_month = $month2 - $month1;
		$diff_day = $day2 - $day1;

		$is_leap = ((($year2)%4 == 0 && ($year2)%100 != 0 || ($year2)%400 == 0) ? 1 : 0);

		/*
			* Do obvious corrections (days before months!)
			*
			* This is a loop in case the previous month is
			* February, and days < -28.
		*/
		$prev_month_days = $days_of_month[$is_leap][$month2 - 1];

		while ($diff_day < 0)
		{
			/* Borrow from the previous month */
			if ($prev_month_days == 0)
			{
				$prev_month_days = 31;
			}
			--$diff_month;
			$diff_day += $prev_month_days;
		}

		if ($diff_month < 0)
		{
			/* Borrow from the previous year */
			--$diff_year;
			$diff_month += 12;
		}

		/* Plural Rules here */
		$online_for = ($this->user->lang('ONLINE_YEAR', (int) $diff_year) .  $this->user->lang('ONLINE_MONTH', (int) $diff_month) . $this->user->lang('ONLINE_DAY', (int) $diff_day));

		/* converts the board start date's output to a most used and accurate rapresentation */
		$onlinesince_start_date = $this->user->format_date($this->config['onlinesince_startdate'], 'd m Y') . $this->user->lang['ONLINE_AT'] . $this->user->format_date($this->config['onlinesince_startdate'], 'H:i:s');

		$this->template->assign_vars(array(
		'VERSION_ONLINESINCE'		=> ext::VERSION_ONLINESINCE,
		'U_ALLOW_ONLINESINCE'		=> ($this->auth->acl_get('u_allow_onlinesince')) ? true : false,
		'L_BOARD_STARTS'			=> (' ' . $onlinesince_start_date . ' '),
		'L_ONLINE_FOR'				=> (' ' . $online_for),
		));
	}
}
