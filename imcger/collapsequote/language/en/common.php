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
	'ACP_IMCGER_LANG_DESC'						=> 'British English',
	'ACP_IMCGER_LANG_EXT_VER'					=> '1.2.0',
	'ACP_IMCGER_LANG_AUTHOR'					=> 'IMC-Ger',

	// Message text
	'COLLAPSEQUOTE_SETTING_SAVED'				=> 'The settings have been saved successfully.',
	'COLLAPSEQUOTE_USER_SETTING_SAVED'			=> 'The settings were successfully saved for all users.',
	'COLLAPSEQUOTE_DEFAULT_SETTING_SAVED'		=> 'The default settings for new users and guests have been saved successfully.',

	// Confirm Box
	'COLLAPSEQUOTE_SAVE'						=> 'Save',
	'COLLAPSEQUOTE_USER_SET'					=> 'Please confirm',
	'COLLAPSEQUOTE_USER_SET_CONFIRM'			=> 'Are you sure you want to overwrite the user settings?<br><br>This will overwrite all user settings with your defaults.<br><strong>This process cannot be undone!</strong>',

	// Extension description
	'COLLAPSEQUOTE_TITLE'						=> 'Collapse Quote',
	'COLLAPSEQUOTE_TITLE_EXPLAIN'				=> 'Here you can set the size of the quote box and the colours of the button used to resize the quote box.',

	// User settings
	'COLLAPSEQUOTE_SETTINGS_USER'				=> 'Settings for guests and new users',

	'COLLAPSEQUOTE_ACTIVE'						=> 'Minimize quotes',
	'COLLAPSEQUOTE_ACTIVE_DESC'					=> 'The quotes are minimized to the number of visible lines and can be displayed in full with a mouse click.',

	'COLLAPSEQUOTE_VISIBLE_LINES'				=> 'Visible lines',
	'COLLAPSEQUOTE_VISIBLE_LINES_DESC'			=> 'Number of visible lines of the quote box in minimized state.',

	'COLLAPSEQUOTE_TEXT_TOP'					=> 'Text alignment',
	'COLLAPSEQUOTE_TEXT_TOP_DESC'				=> 'When "Top" is selected, the first text lines are displayed in the minimized state. With "Bottom" the last lines.',
	'COLLAPSEQUOTE_TEXT_TOP_DESC_ACP'			=> 'When activated, the first lines are displayed in the minimized state. When deactivated, the last lines.',
	'TOP'										=> 'Top',
	'BOTTOM'									=> 'Bottom',

	'COLLAPSEQUOTE_OVERWRITE_USERSET'			=> 'Overwrite user settings',
	'COLLAPSEQUOTE_OVERWRITE_USERSET_DEC'		=> 'With this selection, the settings of all users are overwritten. If you select "Off", only default values for guests and new users will be set.',

	// General settings
	'COLLAPSEQUOTE_SETTINGS_STYLE'				=> 'Settings',

	'COLLAPSEQUOTE_BUTTON_FG_COLOR'				=> 'Foreground button colour',
	'COLLAPSEQUOTE_BUTTON_FG_COLOR_DESC'		=> 'Selection of the font colour of the button to max-/minimize the quote box. If the field is empty, the system colour is used.',
	'COLLAPSEQUOTE_BUTTON_BG_COLOR'				=> 'Background button colour',
	'COLLAPSEQUOTE_BUTTON_BG_COLOR_DESC'		=> 'Selection of the background button colour.  If the field is empty, the system colour is used.',

	'COLLAPSEQUOTE_BUTTON_FG_COLOR_HOVER'		=> 'Foreground button colour for mouseover-effect',
	'COLLAPSEQUOTE_BUTTON_FG_COLOR_HOVER_DESC'	=> 'Selection of the font colour of the button for enlarging or reducing the quotation mark field, when moving the mouse over it. No colour change occurs if the field is empty.',
	'COLLAPSEQUOTE_BUTTON_BG_COLOR_HOVER'		=> 'Background button colour for mouseover-effect',
	'COLLAPSEQUOTE_BUTTON_BG_COLOR_HOVER_DESC'	=> 'Selection of the button background colour, when moving the mouse over it. No colour change occurs if the field is empty.',
]);
