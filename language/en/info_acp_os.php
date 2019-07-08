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
	'ACP_OS_TITLE'					=> 'Online Since Module',
	'ACP_OS'						=> 'Online Since Settings',

	// Controller
	'ACP_OS_CHANGE_SAVED'			=> '<strong>Online Since</strong> BSD manually changed and saved.',

	'ACP_OS_SETNOW_CONFIRM'			=> 'Are you sure you want to set the Board’s Start Date at the present time?',
	'ACP_OS_SETNOW'					=> 'The Board’s Start Date has been sat at the present time.',

	'ACP_OS_RESTORE_CONFIRM'		=> 'Are you sure you want to restore the original Board’s Start Date?',
	'ACP_OS_RESTORED'				=> 'The original Board’s Start Date has been restored.',

	// Template
	'ACP_OS_START_DATE_INFO'		=> 'The Original Board’s Start Date will never be altered in the DB.',

	'ACP_OS_START_DATE'				=> 'Change',
	'ACP_OS_CHANGE_BSD'				=> 'Change Board’s Start Date',
	'ACP_OS_CHANGE_BSD_EXPLAIN'		=> '<emInsert a valid unix (epoch) timestamp. Max 18 digits.</em',
	'ACP_OS_CONVERTER'				=> '<em>Epoch converter</em>',

	'ACP_OS_RESTORE_DATE'			=> 'Restore',
	'ACP_OS_ORIG_BSD'				=> 'Restore original Board’s Start Date',
	'ACP_OS_ORIG_BSD_EXPLAIN'		=> '<em>Do you want to revert to the original?</em>',

	'ACP_OS_NOW_DATE'				=> 'Reset',
	'ACP_OS_NOW_RESET'				=> 'Reset Board’s Start Date to now',
	'ACP_OS_NOW_RESET_EXPLAIN'		=> '<em>A fresh new start for your board</em>',

	// Logs
	'LOG_ACP_OS_BSD_CHANGED'		=> '<strong>Online Since</strong> BSD manually changed.',
	'LOG_ACP_OS_BSD_SETNOW'			=> '<strong>Online Since</strong> BSD updated to time().',
	'LOG_ACP_OS_BSD_RESTORED'		=> '<strong>Online Since</strong> original BSD restored.',
));
