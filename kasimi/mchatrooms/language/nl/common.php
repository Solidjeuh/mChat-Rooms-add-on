<?php

/**
 *
 * @package phpBB Extension - mChat Rooms Addon
 * @copyright (c) 2017 kasimi - https://kasimi.net
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
	'MCHATROOMS_NOTIFICATION_INVITE_TITLE'				=> '<strong>%1$s</strong> heeft <strong>je uitgenodigd</strong> om deze mChat room te joinen: <strong>%2$s</strong>.',
	'MCHATROOMS_NOTIFICATION_INVITE_EXPIRED_TITLE'		=> '<strong class="error">Deze uitnodiging is verlopen.</strong>',
	'MCHATROOMS_NOTIFICATION_INVITE_UNAVAILABLE_TITLE'	=> '<strong class="error">Uitnodigingen zijn tijdelijk niet beschikbaar.</strong>',
]);
