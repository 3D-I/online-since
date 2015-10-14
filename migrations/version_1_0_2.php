<?php
/**
*
* @package Online Since v1.0.2 - 14-10-2015
* @copyright (c) 2015 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace threedi\onlinesince\migrations;

/*
	* adds permission to view Online Since to the Registered Users Group
	* Excluded are: BOTS, NEWLY REGISTERED, GUESTS
	* It is possible to give them this permission in ACP/permissions, though.
	*/
class version_1_0_2 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\threedi\onlinesince\migrations\version_1_0_1',
		);
	}

	public function update_data()
	{
		global $config;

		$orig_board_startdate = (int) $config['board_startdate'];

		return array(
			array('config.add', array('onlinesince_startdate', (int) $orig_board_startdate)),
			array('config.remove', array('onlinesince_version')),
			array('permission.add', array('u_allow_onlinesince')),
			array('permission.permission_set', array('REGISTERED', 'u_allow_onlinesince', 'group')),
		);
	}

	public function revert_data()
	{
		return array(
			array('permission.remove', array('u_allow_onlinesince')),
			array('permission.permission_unset', array('REGISTERED', 'u_allow_onlinesince', 'group')),
		);
	}
}
