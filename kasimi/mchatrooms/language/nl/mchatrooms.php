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
	'MCHATROOMS_HEADER'						=> 'Rooms',
	'MCHATROOMS_NOT_EXIST'					=> 'Deze room bestaat niet',
	'MCHATROOMS_SESSION_EXPIRED'			=> 'Uw sessie is verlopen. Laad de pagina opnieuw en log in.',
	'MCHATROOMS_CREATE'						=> 'Nieuwe room',
	'MCHATROOMS_CREATE_LIMIT_ERROR'			=> 'Kan geen room aanmaken. Maximum aantal kamers bereikt.',
	'MCHATROOMS_PRIVATE_CREATE_LIMIT_ERROR'	=> 'Kan privé room niet maken. U hebt zich bij te veel privé rooms aangesloten. Verlaat alstublieft een privé room en probeer het opnieuw.',
	'MCHATROOMS_PRIVATE_JOIN_LIMIT_ERROR'	=> 'Kan niet deelnemen aan privé room. U hebt zich bij te veel privé rooms aangesloten. Verlaat alstublieft een privé room en probeer het opnieuw.',
	'MCHATROOMS_NAME'						=> 'Room naam',
	'MCHATROOMS_PASSWORD'					=> 'Wachtwoord',
	'MCHATROOMS_PASSWORD_CURRENT'			=> 'Huidig wachtwoord',
	'MCHATROOMS_PASSWORD_NEW'				=> 'Nieuw wachtwoord',
	'MCHATROOMS_PASSWORD_NEW_EXPLAIN'		=> 'Leeg om ongewijzigd te laten.',
	'MCHATROOMS_PASSWORD_CONFIRM'			=> 'Bevestig wachtwoord',
	'MCHATROOMS_PASSWORD_NEW_CONFIRM'		=> 'Bevestig nieuw wachtwoord',
	'MCHATROOMS_PASSWORD_WRONG'				=> 'U hebt het verkeerde wachtwoord opgegeven.',
	'MCHATROOMS_PASSWORD_EMPTY'				=> 'Het wachtwoord is leeg.',
	'MCHATROOMS_PASSWORD_MISMATCH'			=> 'De wachtwoord bevestiging kwam niet overeen.',
	'MCHATROOMS_PASSWORD_CHANGE'			=> 'Wijzig wachtwoord',
	'MCHATROOMS_TYPE'						=> 'Room type',
	'MCHATROOMS_PUBLIC'						=> 'Publieke room',
	'MCHATROOMS_PROTECTED'					=> 'Met wachtwoord beveiligde room',
	'MCHATROOMS_PRIVATE'					=> 'Private room',
	'MCHATROOMS_PRIVATE_EXPLAIN'			=> 'Alleen gebruikers met een uitnodiging kunnen een privé room zien en hieraan deelnemen. Wanneer alle gebruikers een privé room hebben verlaten, wordt deze verwijderd.',
	'MCHATROOMS_ARCHIVE_PROTECTED'			=> '%1$s (wachtwoord beveiligd)',
	'MCHATROOMS_ARCHIVE_PRIVATE'			=> '%1$s (privaat)',
	'MCHATROOMS_JOINING'					=> 'Je gaat naar de room <strong>{room}</strong>.',
	'MCHATROOMS_DENIED'						=> 'Verkeerd wachtwoord',
	'MCHATROOMS_ENTER'						=> 'Betreed room',
	'MCHATROOMS_LEAVE'						=> 'Verlaat room',
	'MCHATROOMS_LOADING'					=> 'Berichten laden…',
	'MCHATROOMS_EMPTY'						=> 'Wees de eerste om een bericht in deze room te plaatsen!',
	'MCHATROOMS_EDIT'						=> 'Bewerk room',
	'MCHATROOMS_OWNER'						=> 'Eigenaar',
	'MCHATROOMS_OWNER_EXPLAIN'				=> 'De gebruiker die deze room heeft gemaakt.',
	'MCHATROOMS_DEL'						=> 'Verwijder room',
	'MCHATROOMS_DEL_CONFIRM'				=> 'Let op: deze room en alle berichten daarin worden verwijderd!',
	'MCHATROOMS_SOUND_ENABLED'				=> 'Geluid voor nieuwe berichten in deze kamer is ingeschakeld',
	'MCHATROOMS_SOUND_DISABLED'				=> 'Geluid voor nieuwe berichten in deze kamer is uitgeschakeld',
	'MCHATROOMS_NEW_MESSAGES'				=> 'Nieuwe berichten!',
	'MCHATROOMS_INVITE'						=> 'Nodig gebruikers uit',
	'MCHATROOMS_INVITE_ROOM'				=> 'Nodig uit voor room',
	'MCHATROOMS_INVITE_USERNAMES'			=> 'Gebruikers om uit te nodigen',
	'MCHATROOMS_INVITE_USERNAMES_EXPLAIN'	=> 'Eén gebruikersnaam per regel.',
	'MCHATROOMS_INVITE_MESSAGE'				=> 'Bericht voor uitgenodigde gebruikers',
	'MCHATROOMS_OWNER_INVITE'				=> 'Eigenaar kan alleen uitnodigen',
	'MCHATROOMS_OWNER_INVITE_EXPLAIN'		=> 'Indien ingesteld op Ja, kan alleen "u" andere gebruikers uitnodigen.',
	'MCHATROOMS_INVITE_SELF'				=> 'Je kunt jezelf niet uitnodigen.',
	'MCHATROOMS_USERS_INVITED_MESSAGE'		=> 'Je hebt %1$s in de %2$s room uitgenodigd.',
	'MCHATROOMS_AND'						=> ' en ',
	'MCHATROOMS_USERS_INVITED_TITLE'		=> [
		1	=> 'Eén gebruiker uitgenodigd',
		2	=> '%d gebruikers uitgenodigd',
	],
	'MCHATROOMS_INVITE_EXPIRE'				=> [
		0	=> 'De uitnodigingen zullen niet verlopen.',
		1	=> 'De uitnodigingen verlopen over 1 minuut.',
		2	=> 'De uitnodigingen verlopen over %1$d minuten.',
	],
	'MCHATROOMS_INVITE_NOT_FOUND'			=> [
		1	=> 'De gevraagde gebruiker %2$s bestaat niet.',
		2	=> 'De gevraagde gebruikers %2$s bestaan niet.',
	],
	'MCHATROOMS_INVITE_ACTIVE'				=> [
		1	=> '%2$s is al uitgenodigd.',
		2	=> '%2$s zijn al uitgenodigd.',
	],
	'MCHATROOMS_INVITE_NO_ROOMS_PERMISSION'	=> [
		1	=> '%2$s heeft geen toestemming om rooms te bekijken of heeft rooms uitgeschakeld.',
		2	=> '%2$s heeft geen toestemming om kamers te zien of heeft rooms uitgeschakeld.',
	],
	'MCHATROOMS_INVITE_MAX'					=> [
		0	=> 'Je kunt momenteel geen gebruikers meer uitnodigen. Probeer het later opnieuw.',
		1	=> 'U kunt op dit moment slechts één gebruiker uitnodigen.',
		2	=> 'U kunt momenteel maximaal %1$d gebruikers uitnodigen.',
	],
	'MCHATROOMS_USERS'						=> [
		0 => 'Er zijn geen gebruikers in de room “%2$s”',
		1 => 'Er is Eén gebruiker in de room “%2$s”',
		2 => 'Er zijn %1$d gebruikers in de room “%2$s”',
	],
	'MCHATROOMS_JOINED_TIME'				=> [
		0 => 'wachtende uitnodiging',
		1 => 'toegetreden %2$s',
	],
	'MCHATROOMS_ARCHIVE'					=> 'Je bekijkt het archief van de room',
]);
