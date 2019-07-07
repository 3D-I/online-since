<?php
/**
 *
 * Online Since. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2005 - 2019, 3Di, https://www.phpbbstudio.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace threedi\os\migrations;

class install_sample_data extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->config->offsetExists('threedi_os_startdate');
	}

	public static function depends_on()
	{
		return array('\phpbb\db\migration\data\v320\v320');
	}

	/**
	 * Add, update or delete data stored in the database during extension installation.
	 *
	 * @return array Array of data update instructions
	 */
	public function update_data()
	{
		$orig_board_startdate = (int) $this->config['board_startdate'];

		return array(
			// Add new config table settings
			array('config.add', array('threedi_os_startdate', (int) $orig_board_startdate)),

			// Add new permissions
			array('permission.add', array('a_new_threedi_os')), // New admin permission
			array('permission.add', array('u_new_threedi_os')), // New user permission

			// Set our new permissions
			array('permission.permission_set', array('ROLE_ADMIN_FULL', 'a_new_threedi_os')), // Give ROLE_ADMIN_FULL a_new_threedi_os permission
			array('permission.permission_set', array('REGISTERED', 'u_new_threedi_os', 'group')), // Give REGISTERED group u_new_threedi_os permission
		);
	}
}
