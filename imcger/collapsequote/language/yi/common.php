<?php
/**
 *
 * Collapse Quote
 * An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Thorsten Ahlers
 * @license GNU General Public License, version 2 (GPL-2.0)
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [

	// Language pack author
	'ACP_IMCGER_LANG_DESC'						=> 'אידיש',
	'ACP_IMCGER_LANG_EXT_VER'					=> '1.2.0',
	'ACP_IMCGER_LANG_AUTHOR'					=> 'איל משולש',

	// Message text
	'COLLAPSEQUOTE_SETTING_SAVED'				=> 'די אנשטעלונגען זענען סוקסעספול געווארן אפגעהיטן.',
	'COLLAPSEQUOTE_USER_SETTING_SAVED'			=> 'די אנשטעלונגען זענען סוקסעספול געווארן אפגעהיטן פאר אלע באנוצער.',
	'COLLAPSEQUOTE_DEFAULT_SETTING_SAVED'		=> 'די דיפאולט אנשטעלונגען פאר געסט און נייע באנוצער זענען סוקסעספול געווארן אפגעהיטן.',

	// Confirm Box
	'COLLAPSEQUOTE_SAVE'						=> 'היט אפ',
	'COLLAPSEQUOTE_USER_SET'					=> 'באשטעטיג',
	'COLLAPSEQUOTE_USER_SET_CONFIRM'			=> 'ביסטו זיכער אז דו ווילסט איבערשרייבן די באניצער אנשטעלונגען?<br><br>דאס וועט טוישן יעדעמס אנשטעלונגען צו וויאזוי דו האסט יעצט אנגעשטעלט.<br><strong>דאס קען מען נישט צוריק טוישן נאכדעם!</strong>',

	// Extension description
	'COLLAPSEQUOTE_TITLE'						=> 'קאלעפס קוואוט',
	'COLLAPSEQUOTE_TITLE_EXPLAIN'				=> 'דא קענסטו אנשטעלן די גרויס פון די ציטאט, און די קאליר פון דעם קנעפל עס צו גרויס/קליין מאכן.',

	// User settings
	'COLLAPSEQUOTE_SETTINGS_USER'				=> 'אנשטעלונגען פאר געסט און נייע באנוצער',

	'COLLAPSEQUOTE_ACTIVE'						=> 'פארקלענער ציטאטן',
	'COLLAPSEQUOTE_ACTIVE_DESC'					=> 'די ציטאטן ווערן פארקלענערט צו די צאל שורות וואס ווערן געוויזן, און די גאנצע ווערט געוויזן מיט א קליק מיטן מייזל.',

	'COLLAPSEQUOTE_VISIBLE_LINES'				=> 'צאל געוויזענע שורות',
	'COLLAPSEQUOTE_VISIBLE_LINES_DESC'			=> 'סכום פון שורות וואס זאלן געוויזן ווערן אינעם פארקלענערטן ציטאט קעסטל.',

	'COLLAPSEQUOTE_TEXT_TOP'					=> 'טעקסט אויסשטעל',
	'COLLAPSEQUOTE_TEXT_TOP_DESC'				=> 'וועלכע טייל פונעם טעקסט זאל געזען ווערן אינעם קעסטל.',
	'COLLAPSEQUOTE_TEXT_TOP_DESC_ACP'			=> 'ווען אנגעצינדן, ווערן די אויבערשטע שורות געוויזן. ווען פארלאשן, די אונטערשטע.',
	'TOP'										=> 'אויבערשטע',
	'BOTTOM'									=> 'אונטערשטע',

	'COLLAPSEQUOTE_OVERWRITE_USERSET'			=> 'טויש באניצער אנשטעלונגען',
	'COLLAPSEQUOTE_OVERWRITE_USERSET_DEC'		=> 'With this selection, the settings of all users are overwritten. If you select "Off", only default values for guests and new users will be set.',

	// General settings
	'COLLAPSEQUOTE_SETTINGS_STYLE'				=> 'אנשטעלונגען',

	'COLLAPSEQUOTE_BUTTON_FG_COLOR'				=> 'קאליר',
	'COLLAPSEQUOTE_BUTTON_FG_COLOR_DESC'		=> 'Selection of the font colour of the button to max-/minimize the quote box. If the field is empty, the system colour is used.',
	'COLLAPSEQUOTE_BUTTON_BG_COLOR'				=> 'הינטערגרינד קאליר',
	'COLLAPSEQUOTE_BUTTON_BG_COLOR_DESC'		=> 'Selection of the background button colour.  If the field is empty, the system colour is used.',

	'COLLAPSEQUOTE_BUTTON_FG_COLOR_HOVER'		=> 'קאליר ווען מען האווערט דעם מייז',
	'COLLAPSEQUOTE_BUTTON_FG_COLOR_HOVER_DESC'	=> 'Selection of the font colour of the button for enlarging or reducing the quotation mark field, when moving the mouse over it. No colour change occurs if the field is empty.',
	'COLLAPSEQUOTE_BUTTON_BG_COLOR_HOVER'		=> 'הינטערגרינד קאליר ווען מען האווערט דעם מייז',
	'COLLAPSEQUOTE_BUTTON_BG_COLOR_HOVER_DESC'	=> 'Selection of the button background colour, when moving the mouse over it. No colour change occurs if the field is empty.',
]);
