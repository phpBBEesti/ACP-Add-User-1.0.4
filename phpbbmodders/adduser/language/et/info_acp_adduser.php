<?php
/**
 *
 * Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
 *
 * @package phpBB Extension - Add User
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@rmcgirr83.org
 * @copyright (c) 2014 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
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
	// ACP Module
	'ACP_ADD_USER'				=> 'AJP Lisa kasutaja',
	'DIR_NOT_EXIST'				=> 'Valitud keeles %s puuduvad vajalikud failid. Palun tõlkige need ja laadige laienduse kasutamiseks laienduse kataloogi %s.',
	'ACP_ACCOUNT_ADDED'			=> 'Kasutajakonto on loodud. Kasutaja võib nüüd sisselogida. Kasutaja e-posti aadressile saadeti kasutajanimi ja parool.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Kasutajakonto on loodud, kuid foorumi seaded nõuavad kasutajalt oma konto aktiveerimist.<br />Aktiveerimiskood saadeti kasutaja e-posti aadressile.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Konto on loodud, kuid foorumi seaded nõuavad administraatori poolt konto aktiveerimist.<br />Administraatoritele on saadetud e-kiri ja kasutaja saab sellest teada, kui nende konto on aktiveeritud',
	'ACP_ADMIN_ACTIVATE'		=> 'E-posti saadetakse administraatorile teade konto aktiveerimiseks, alternatiivina võid kontrollida konto aktiveerimist allpool, et aktiveerida konto koheselt pärast seda, kui see on loodud. Kasutaja saab e-kirja, mis sisaldab vajalike andmeid sisselogimiseks.',
	'ACP_EMAIL_ACTIVATE'		=> 'Kui konto on loodud, saab kasutaja konto aktiveerimiseks e-kirja, milles on aktiveerimislink.',
	'ACP_INSTANT_ACTIVATE'		=> 'Konto aktiveeritakse koheselt. Kasutaja saab e-kirja, milles on konto sisselogimise andmed.',

	'ADD_USER'					=> 'Lisa kasutaja',
	'ADD_USER_EXPLAIN'			=> 'Loo uus kasutajakonto. Kui teie aktiveerimise seaded on määratud ADMINISTRAATORI POOLT AKTIVEERIMINE, siis saate kasutaja aktiveerida kohe.',
	'MOD_VERSION'				=> 'Versioon %s',
	'ADMIN_ACTIVATE'			=> 'Aktiveeri kasutajakonto',
	'CONFIRM_PASSWORD'			=> 'Kinnita salasõna',
	'EDIT_USER_GROUPS'			=> '%sSelle kasutaja gruppide muutmiseks klõpsake siin%s',
	'GROUP_ADD'					=> 'Siin valiku tegemine lisab kasutaja valitud gruppi ja Registreeritud kasutajate gruppi.',
	'GROUP_DEFAULT_EXPLAIN'		=> 'Selle ruudu märkimisel määrab kasutaja ülaltoodud grupi vaikimisi.',
	'CONTINUE_EDIT_USER'		=> '%1$sHaldamiseks klikki siin %2$s’s profiil%3$s', // e.g.: Click here to edit Joe’s profile.
	'PASSWORD_EXPLAIN'			=> 'Kui parooli ala on tühi, genereeritakse parool automaatselt.',
	'ENABLE_NEWUSER'			=> 'Luba uus kasutaja',
	'ENABLE_NEWUSER_EXPLAIN'	=> 'Kui seadeks on "jah", lisatakse kasutaja uude Registreeritud kasutajagruppi',
	// ACP Logs
	'LOG_USER_ADDED'			=> '<strong>Uus kasutaja lisatud</strong><br />» %s',
));
