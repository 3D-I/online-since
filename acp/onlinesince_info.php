<?php
/**
*
* @package Online Since
* @copyright (c) 2015 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace threedi\onlinesince\acp;

class onlinesince_info
{
	function module()
	{
		return array(
			'filename'	=> '\threedi\onlinesince\acp\onlinesince_module',
			'title'		=> 'ACP_ONLINE_SINCE',
			'version'	=> '1.0.2',
			'modes'		=> array(
				'main'		=> array('title' => 'ACP_ONLINE_SINCE', 'auth' => 'ext_threedi/onlinesince && acl_a_board', 'cat' => array('ACP_ONLINE_SINCE')),
			),
		);
	}
}
