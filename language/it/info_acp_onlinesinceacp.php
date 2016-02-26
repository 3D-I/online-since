<?php
/**
*
* @package Online Since 1.1.0 - Info ACP [Italiano]
* @copyright (c) 2005 - 2016 3Di
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
	'ONLINE_SINCE_ACP_TOOLS_EXPLAIN'			=> 'Qui trovi alcuni settaggi, buon divertimento',

	'ONLINE_SINCE_ACP_CHANGE_BSD'				=> 'Cambia la data di inizio della Board su Online Since',
	'ONLINE_SINCE_ACP_CHANGE_BSD_EXPLAIN'		=> '<br />I.e.: La data del tuo Compleanno.</br></br><em>La data originale nel DB non verrà toccata, potrai riutilizzarla in un secondo tempo.</em>',

	'ONLINE_SINCE_ACP_ORIG_BSD'					=> 'Restore dalla data originale della Board',
	'ONLINE_SINCE_ACP_ORIG_BSD_EXPLAIN'			=> '<em>Vuoi tornare alle origini?</em>',
	'ONLINE_SINCE_ACP_INVALID_BSD'				=> 'La data inserita non è valida.',

	'ONLINE_SINCE_ACP_GFX'						=> 'ACP immagine di sfondo grafico',
	'ONLINE_SINCE_ACP_GFX_EXPLAIN'				=> '<em>Vuoi vedere la grafica?',

	'ONLINE_SINCE_ACP_START_DATE_RESET'			=> 'Setta Online Since ad adesso.',
	'ONLINE_SINCE_ACP_START_DATE_RESET_EXPLAIN'	=> 'Una fresca ripartenza della board',

	'ONLINESINCE_SAVED'							=> 'Online Since:i tuoi settaggi sono stati salvati.',

	//'UNIX_TIMESTAMP'							=> ' using an UNIX Timestamp',
	'UNIX_TIMESTAMP_EXPLAIN'					=> '<em>Inserire un valido epoch timestamp.<br />Solo numeri interi (0-9) permessi. Max 12.</em>',
	'UNIX_TIMESTAMP_WHO'						=> '<br /><em>http://www.dracon.biz/timestamp.php</em>',

	'ONLINE_AT'									=> ' alle ',
	'OS_TIMESTAMP_MUST_BE_NUMBERS_ONLY'			=> 'Online Since: Solo numeri interi permessi.<br />Prego correggere i dati inseriti',

	'COMPARISON_ERROR'							=> 'Online Since: Errore di comparazione',
));
