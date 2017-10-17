<?php
/**
*
* @package Online Since
* @copyright (c) 2005, 2017 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace threedi\onlinesince\migrations;

class m1_configs extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		/**
		 * If does NOT exists go ahead
		 */
		return isset($this->config['threedi_os']);
	}

	static public function depends_on()
	{
		return ['\phpbb\db\migration\data\v31x\v3111'];
	}

	public function update_data()
	{
		$orig_board_startdate = (int) $this->config['board_startdate'];

		return array(
			array('config.add', array('threedi_os_version', '1.1.0-rc')),
			array('config.add', array('threedi_os_startdate', (int) $orig_board_startdate)),
			array('config.add', array('threedi_os_startdate_reset', 0)),
			array('config.add', array('threedi_os_restore', 0)),
		);
	}
}
