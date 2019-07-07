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

class install_acp_module extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return array('\phpbb\db\migration\data\v320\v320');
	}

	public function update_data()
	{
		return array(
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_OS_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_OS_TITLE',
				array(
					'module_basename'	=> '\threedi\os\acp\main_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
