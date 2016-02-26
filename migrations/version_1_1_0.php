<?php
/**
*
* @package Online Since 1.1.0
* @copyright (c) 2005 - 2016 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/


namespace threedi\onlinesince\migrations;

class version_1_1_0 extends \phpbb\db\migration\migration
{
/*
	public function effectively_installed()
	{
		return isset($this->config['onlinesince_startdate']);
	}

*/

	static public function depends_on()
	{
		return array(
			'\threedi\onlinesince\migrations\version_1_0_3',
		);

	}

	public function update_data()
	{
		global $config;

		$orig_board_startdate = (int) $config['board_startdate'];

		return array(
			array('config.add', array('onlinesince_startdate', (int) $orig_board_startdate)),
			array('config.add', array('onlinesince_startdate_reset', 0)),
			array('config.add', array('onlinesince_gfx', 1)),
			array('config.add', array('onlinesince_restore', 0)),
		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('onlinesince_startdate')),
			array('config.remove', array('onlinesince_startdate_reset')),
			array('config.remove', array('onlinesince_gfx')),
			array('config.remove', array('onlinesince_restore')),
		);
	}
}
