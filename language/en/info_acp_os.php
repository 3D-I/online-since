<?php
/**
 *
 * Online Since. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2005 - 2019, 3Di, https://www.phpbbstudio.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
	'ACP_OS_TITLE'	=> 'Online Since Module',
	'ACP_OS'		=> 'Online Since Settings',

	'ONLINE_SINCE_ACP_CHANGE_BSD'				=> 'Change Online Since\'s Board start date',
	'ONLINE_SINCE_ACP_CHANGE_BSD_EXPLAIN'		=> '<br />I.e.: your Birthday’s date.</br></br><em>Original Board’s startdate will not be not altered in the DB. You can restore it at some point.</em>',

	'ONLINE_SINCE_ACP_ORIG_BSD'					=> 'Restore original Board’s start Date',
	'ONLINE_SINCE_ACP_ORIG_BSD_EXPLAIN'			=> '<em>Do you want to revert to the origins?</em>',
	'ONLINE_SINCE_ACP_INVALID_BSD'				=> 'The entered date is not valid.',

	'ONLINE_SINCE_ACP_START_DATE_RESET'			=> 'Set the Online Since to now()',
	'ONLINE_SINCE_ACP_START_DATE_RESET_EXPLAIN'	=> 'A fresh new start for your board',

	'ONLINESINCE_SAVED'							=> 'Online Since: Your settings have been saved.',

	//'UNIX_TIMESTAMP'							=> ' using an UNIX Timestamp',
	'UNIX_TIMESTAMP_EXPLAIN'					=> '<em>Insert a valid unix (epoch) timestamp.<br />Only integers (0-9) and minus allowed. Max 18.</em>',
	'UNIX_TIMESTAMP_WHO'						=> '<br /><em>https://www.epochconverter.com</em>',

	'ONLINE_AT'									=> ' at ',
	'OS_TIMESTAMP_MUST_BE_NUMBERS_ONLY'			=> 'Online Since: Only numbers (integers) allowed<br />Please correctly fill the timestamp field',

	'COMPARISON_ERROR'							=> 'Online Since: Comparison error',

	'LOG_ACP_OS_SETTINGS'		=> '<strong>Online Since settings updated</strong>',
));
