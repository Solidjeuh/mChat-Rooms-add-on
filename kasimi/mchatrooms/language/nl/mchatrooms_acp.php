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
	'MCHATROOMS_SETTINGS'					=> 'mChat Rooms',
	'MCHATROOMS_MAX_ROOMS'					=> 'Globaal maximum aantal rooms',
	'MCHATROOMS_MAX_ROOMS_EXPLAIN'			=> 'Beperk het totale aantal rooms dat kan worden gemaakt. Hierdoor kan de beheerder een overstroming aan rooms voorkomen wanneer gebruikers rooms mogen maken.<br><em>Stel in op 0 om een onbeperkt aantal rooms toe te staan. Standaard is 10 rooms.</em>',
	'MCHATROOMS_MAX_PRIVATE_ROOMS'			=> 'Maximaal aantal privé rooms per gebruiker',
	'MCHATROOMS_MAX_PRIVATE_ROOMS_EXPLAIN'	=> 'Beperk het totale aantal privé rooms waaraan elke gebruiker kan deelnemen. Hierdoor kan de beheerder een gebruiker dwingen om oude en ongebruikte rooms te verlaten.<br><em>Stel in op 0 om een gebruiker toe te staan om deel te nemen aan een onbeperkt aantal privé rooms. Standaard is 10 rooms.</em>',
	'MCHATROOMS_ROOMS'						=> 'rooms',

	'MCHATROOMS_INVITE_EXPIRATION'			=> 'Uitnodigingen verlopen na',
	'MCHATROOMS_INVITE_EXPIRATION_EXPLAIN'	=> 'Aantal minuten nadat een uitnodiging ongeldig wordt. Een gebruiker kan niet worden uitgenodigd voor een room, terwijl een uitnodiging voor deze room nog steeds geldig is. Pas nadat de uitnodiging is verlopen, kan de gebruiker opnieuw worden uitgenodigd voor de room.<br><em>Stel in op 0 om uit te schakelen, maar houd er rekening mee dat gebruikers overspoeld kunnen worden met uitnodigingen. Standaard is 15 minuten.</em>',
	'MCHATROOMS_MINUTES'					=> 'minuten',

	'MCHATROOMS_MAX_INVITES'				=> 'Maximum aantal uitnodigingen',
	'MCHATROOMS_MAX_INVITES_EXPLAIN'		=> 'Het aantal uitnodigingen dat een gebruiker kan verzenden binnen de bovenstaande vervaltijd.<br><em>Stel in op 0 om onbeperkte uitnodigingen toe te staan. Standaard is 10 uitnodigingen.</em>',
	'MCHATROOMS_INVITES'					=> 'uitnodigingen',

	'MCHATROOMS_POST_NOTIFICATIONS'				=> 'Room voor nieuw bericht over onderwerpen, plaatsen, citeren en bewerken',
	'MCHATROOMS_LOGIN_NOTIFICATIONS'			=> 'Room voor nieuwe aanmelding meldingen',

	'MCHATROOMS_PRUNE_SKIP_LOBBY'				=> 'Sluit lobby uit voor bericht opschoning',
	'MCHATROOMS_PRUNE_SKIP_LOBBY_EXPLAIN'		=> 'Als dit is ingesteld op Ja worden berichten in de lobby <strong>niet opgeschoond</strong>.',
	'MCHATROOMS_PRUNE_SKIP_PUBLIC'				=> 'Sluit openbare rooms uit voor opschoning',
	'MCHATROOMS_PRUNE_SKIP_PUBLIC_EXPLAIN'		=> 'Als dit is ingesteld op Ja worden berichten in andere openbare rooms dan de lobby <strong>niet opgeschoond</strong>.',
	'MCHATROOMS_PRUNE_SKIP_PROTECTED'			=> 'Beveiligde rooms uitsluiten voor bericht opschoning',
	'MCHATROOMS_PRUNE_SKIP_PROTECTED_EXPLAIN'	=> 'Als dit is ingesteld op Ja worden berichten in met een wachtwoord beveiligde room <strong>niet opgeschoond</strong>.',
	'MCHATROOMS_PRUNE_SKIP_PRIVATE'				=> 'Privé rooms uitsluiten van bericht opschoning',
	'MCHATROOMS_PRUNE_SKIP_PRIVATE_EXPLAIN'		=> 'Als dit is ingesteld op Ja worden berichten in privé rooms <strong>niet opgeschoond</strong>.',

	'MCHATROOMS_PURGE_ROOM'						=> 'Verwijder nu alle berichten in de geselecteerde rooms',
	'MCHATROOMS_PURGE_ROOM_EXPLAIN'				=> 'Alleen voor oprichters. Alleen openbare en met een wachtwoord beveiligde rooms kunnen worden verwijderd. Privé rooms kunnen niet worden opgeschoond.',
	'MCHATROOMS_PURGED_ROOM'					=> 'Alle berichten in de room “%1$s” zijn verwijderd.',

	'MCHATROOMS_DELETE'						=> 'Verwijder nu alle rooms',
	'MCHATROOMS_DELETE_EXPLAIN'				=> 'Alleen voor oprichters. Hiermee worden alle openbare, met een wachtwoord beveiligde en privé rooms inclusief de berichten verwijderd, behalve de lobby.',
	'MCHATROOMS_DELETE_CONFIRM'				=> 'Bevestig het verwijderen van alle rooms',
	'MCHATROOMS_DELETED'					=> 'Alle mChat rooms zijn verwijderd.',

	'MCHAT_ROOMS_ENABLED'					=> 'Rooms weergeven',
	'MCHAT_ROOMS_ENTER_ALL'					=> 'Word automatisch lid van alle openbare rooms',

	'MCHATROOMS_DISABLE_WARNING' 			=> '<p style="color: red; font-size: 2em; margin-top: 1em;">Attentie!</p><strong style="color:red;">Wanneer u deze extensie uitschakelt, worden berichten van alle rooms zichtbaar voor alle gebruikers.</strong><br><br>Daarom wordt het ten zeerste aanbevolen om ook de:<ul><li>mChat extensie uit te schakelen alvorens de mChat Rooms addon extensie uit te schakelen, of</li><li>verwijder handmatig alle rooms voordat u de extensie mChat Rooms uitschakelt.</li></ul>',
	'MCHATROOMS_DELETE_DATA_WARNING'		=> '<p style="font-size: 2em; margin-top: 1em;">Attentie!</p><div style="font-size: .9em; margin-top: 1em;">Voordat u de mChat extensie verwijdert, wordt het ten zeerste aanbevolen om de data van de extensie mChat Rooms te verwijderen. Het achterlaten van gegevens van de extensie mChat Rooms in de database zal fouten veroorzaken wanneer:<br><br><ul><li>het verwijderen van gegevens van de add-on extensie mChat Rooms zonder dat mChat is geïnstalleerd</li><li>daarna kan u de mChat extensie opnieuw installeren</li></ul></div>',
]);
