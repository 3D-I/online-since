<?php
/**
*
* @package Online Since 1.1.0- ACP [English]
*
* @copyright (c) 2016 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_ONLINE_SINCE_PAGE_TITLE'				=> 'Online Since ACP Tools',
	'ACP_ONLINE_SINCE_TOOLS'					=> 'Online Since',
	'ACP_ONLINE_SINCE'							=> 'Settings',
	'ONLINE_SINCE_ACP_TOOLS'					=> 'Online Since ACP Tools',
	'ONLINE_SINCE_ACP_TOOLS_EXPLAIN'			=> 'Here you can set some things, enjoy.',

	'ONLINE_SINCE_ACP_CHANGE_BSD'				=> 'Change Online Since\'s Board start date',
	'ONLINE_SINCE_ACP_CHANGE_BSD_EXPLAIN'		=> '<br />I.e.: your Birthday’s date.</br></br><em>Original Board’s startdate will not be not altered in the DB. You can restore it at some point.</em>',

	'ONLINE_SINCE_ACP_ORIG_BSD'					=> 'Restore original Board’s start Date',
	'ONLINE_SINCE_ACP_ORIG_BSD_EXPLAIN'			=> '<em>Do you want to revert to the origins?</em>',
	'ONLINE_SINCE_ACP_INVALID_BSD'				=> 'The entered date is not valid.',

	'ONLINE_SINCE_ACP_GFX'					=> 'ACP graphic background',
	'ONLINE_SINCE_ACP_GFX_EXPLAIN'			=> '<em>Do you want GFX to be shown?',

	'ONLINE_SINCE_RESTORE_ORIG_BSD_EXPLAIN'			=> 'Selecting this will reset the user’s post count to zero.<br /><strong>Note:</strong> Selecting this will overwrite any value entered in the <strong>Reset value</strong> field.',

	'ONLINE_SINCE_ACP_START_DATE_RESET'		=> 'Set the Online Since to now()',
	'ONLINE_SINCE_ACP_START_DATE_RESET_EXPLAIN'	=> 'A fresh new start for your board',

	'ONLINESINCE_SAVED'						=> 'Online Since: Your settings have been saved.',

	//'UNIX_TIMESTAMP'					=> ' using an UNIX Timestamp',
	'UNIX_TIMESTAMP_EXPLAIN'			=> '<em>Insert a valid epoch timestamp.<br />Only integers (0-9) allowed. Max 12.</em>',
	'UNIX_TIMESTAMP_WHO'				=> '<br /><em>http://www.dracon.biz/timestamp.php</em>',

	'ONLINE_AT'			=> ' at ',
	'OS_TIMESTAMP_MUST_BE_NUMBERS_ONLY' => 'Only numbers allowed beetwen 0 and 2147483647<br />Please correctly fill the timestamp field, empty field is not allowed',

	'ERRORE DI COMPARAZIONE'			=> 'Errore di comparazione',
));
