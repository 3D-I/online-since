<?php
/**
*
* Online Since 1.0.1 [English]
*
* @copyright (c) 2005-2008-2015 3Di
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'ONLINE_START'		=> 'Online since ',
	'ONLINE_SINCE'		=> ' for ',
	'ONLINE_TITLE'		=> 'Time spent by the foundation',
	'ONLINE_YEAR'	=> array(
		0	=> '<b>%d</b> Years ',
		1	=> '<b>%d</b> Year ',
		2	=> '<b>%d</b> Years ',
		3	=> '<b>%d</b> Year ',
		4	=> '<b>%d</b> Years ',
	),
	'ONLINE_MONTH'	=> array(
		0	=> '<b>%d</b> Months ',
		1	=> '<b>%d</b> Month ',
		2	=> '<b>%d</b> Months ',
		3	=> '<b>%d</b> Month ',
		4	=> '<b>%d</b> Months ',
	),
	'ONLINE_DAY'	=> array(
		0	=> '<b>%d</b> Days',
		1   => '<b>%d</b> Day',
		2   => '<b>%d</b> Days',
		3   => '<b>%d</b> Day',
		4   => '<b>%d</b> Days',
	)
));
