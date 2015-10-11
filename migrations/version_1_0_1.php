<?php
/**
*
* @package Online Since v1.0.1 - 11-10-2015
* @copyright (c) 2015 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace threedi\onlinesince\migrations;

class version_1_0_1 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('onlinesince_version', '1.0.1')),
		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('onlinesince_version')),
		);
	}
}
