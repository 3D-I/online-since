<?php
/**
*
* @package Online Since
* @copyright (c) 2005 - 2017 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace threedi\onlinesince;

/**
* Extension class for custom enable/disable/purge actions
*/

class ext extends \phpbb\extension\base
{
	/**
	 * Check whether the extension can be enabled.
	 * Provides meaningful(s) error message(s) and the back-link on failure.
	 * CLI and 3.1/3.2 compatible
	 *
	 * @return bool
	 */
	public function is_enableable()
	{
		$is_enableable = true;

		$user = $this->container->get('user');
		$user->add_lang_ext('threedi/onlinesince', 'ext_require');
		$lang = $user->lang;

		if (!(phpbb_version_compare(PHPBB_VERSION, '3.2.1', '>=') || (phpbb_version_compare(PHPBB_VERSION, '3.1.11', '>=') && phpbb_version_compare(PHPBB_VERSION, '3.2.0@dev', '<'))))
		{
			$lang['EXTENSION_NOT_ENABLEABLE'] .= '<br>' . $user->lang('ERROR_MSG_3111_321_MISTMATCH');
			$is_enableable = false;
		}

		if (!phpbb_version_compare(PHP_VERSION, '5.4.0', '>='))
		{
			$lang['EXTENSION_NOT_ENABLEABLE'] .= '<br>' . $user->lang('ERROR_MSG_PHP_VERSION');
			$is_enableable = false;
		}

		$user->lang = $lang;

		return $is_enableable;
	}
}
