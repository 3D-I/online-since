<?php
/**
*
* @package Online Since 1.1.0
* @copyright (c) 2005 - 2016 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace threedi\onlinesince\migrations;

class version_1_0_3 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\threedi\onlinesince\migrations\version_1_0_1',
		);
	}

	public function update_data()
	{
		return array(
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_ONLINE_SINCE_TOOLS')),

			array('module.add', array(
				'acp', 'ACP_ONLINE_SINCE_TOOLS', array(
					'module_basename'	=> '\threedi\onlinesince\acp\onlinesince_module',
					'modes'				=> array('main'),
				),
			))
		);
	}

	public function revert_data()
	{
		return array(
			array('module.remove', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_ONLINE_SINCE_TOOLS'
			)),

			array('module.remove', array(
				'acp', 'ACP_ONLINE_SINCE_TOOLS', array(
					'module_basename'	=> '\threedi\onlinesince\acp\onlinesince_module',
					'modes'				=> array('main'),
				),
			))
		);
	}
}
