<?php
/**
*
* Online Since 1.0.1 [Italiano]
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
	'ONLINE_START'		=> 'Online dal ',
	'ONLINE_SINCE'		=> ' per ',
	'ONLINE_TITLE'		=> 'Tempo trascorso dalla Fondazione',
	'ONLINE_YEAR'	=> array(
		1	=> '<strong>%d</strong> Anno ',
		2	=> '<strong>%d</strong> Anni ',
	),
	'ONLINE_MONTH'	=> array(
		1	=> '<strong>%d</strong> Mese ',
		2	=> '<strong>%d</strong> Mesi ',
	),
	'ONLINE_DAY'	=> array(
		1   => '<strong>%d</strong> Giorno',
		2   => '<strong>%d</strong> Giorni',
	)
));