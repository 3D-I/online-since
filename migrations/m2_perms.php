<?php
/**
*
* @package Online Since
* @copyright (c) 2005 - 2017 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace threedi\onlinesince\migrations;

/*
	* adds permission to view Online Since to the Registered Users Group
	* Excluded are: BOTS, NEWLY REGISTERED, GUESTS
	* It is possible to give them this permission in ACP/permissions, though.
	*/
class m2_perms extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		/**
		 * If does exists go ahead
		 */
		return !phpbb_version_compare($this->config['threedi_os_version'], '1.1.0-rc', '>=');
	}

	static public function depends_on()
	{
				return ['\threedi\onlinesince\migrations\m1_configs'];

	}

	public function update_data()
	{
		return [
			['permission.add', ['u_allow_onlinesince']],
			['permission.permission_set', ['REGISTERED', 'u_allow_onlinesince', 'group']],
			['permission.add', ['a_onlinesince_admin']],
			['permission.permission_set', ['ADMINISTRATORS', 'a_onlinesince_admin', 'group']],
		];
	}
}
