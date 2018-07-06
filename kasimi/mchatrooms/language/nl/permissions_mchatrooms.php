<?php

/**
 *
 * @package phpBB Extension - mChat Rooms Addon
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net> 
 * @license proprietary
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, [
	'ACP_PERMISSIONS_CAT_MCHATROOMS'	=> 'mChat Rooms',

	'ACL_U_MCHATROOMS_VIEW'				=> 'Kan mChat rooms zien',
	'ACL_U_MCHATROOMS_CREATE'			=> 'Kan mChat rooms maken',
	'ACL_U_MCHATROOMS_CREATE_PRIVATE'	=> 'Kan privé chatrooms maken',
	'ACL_U_MCHATROOMS_INVITE'			=> 'Kan gebruikers uitnodigen in mChat rooms',
	'ACL_U_MCHATROOMS_EDIT_OWN'			=> 'Kan eigen mChat rooms bewerken',
	'ACL_U_MCHATROOMS_EDIT_ALL'			=> 'Kan alle mChat rooms bewerken',
	'ACL_U_MCHATROOMS_DELETE_OWN'		=> 'Kan eigen mChat room verwijderen',
	'ACL_U_MCHATROOMS_DELETE_ALL'		=> 'Kan alle mChat rooms verwijderen',
	'ACL_U_MCHATROOMS_PROTECTED'		=> 'Kan mChat rooms die met een wachtwoord zijn beveiligd bekijken/maken/bewerken/verwijderen (hiervoor is de betreffende toestemming vereist)',
	'ACL_U_MCHATROOMS_MASTERKEY'		=> 'Kan met wachtwoord beveiligde mChat rooms betreden/bewerken/verwijderen zonder het wachtwoord op te geven (hiervoor is de betreffende toestemming vereist)',
	'ACL_U_MCHATROOMS_SORT'				=> 'Kan mChat rooms sorteren',

	'ACL_U_MCHAT_ROOMS_ENABLED'			=> 'Kan <em>Toon rooms</em> aanpassen',
	'ACL_U_MCHAT_ROOMS_ENTER_ALL'		=> 'Kan <em>Alle kamers automatisch betreden</em> aanpassen',
]);
