<?php
/**
*
* @package Online Since v1.0.1 - 12-10-2015
* @copyright (c) 2015 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace threedi\onlinesince\migrations;

class version_1_0_2 extends \phpbb\db\migration\migration
{
	/* If already installed skips the changes */
	public function effectively_installed()
	{
		return isset($this->config['onlinesince_version']) && version_compare($this->config['onlinesince_version'], '1.0.2', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\threedi\onlinesince\migrations\version_1_0_1',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('onlinesince_version', '1.0.2')),
			array('permission.add', array('u_allow_onlinesince')),
		);
	}

	public function revert_data()
	{
		return array(
			array('permission.remove', array('u_allow_onlinesince')),
		);
	}
}
