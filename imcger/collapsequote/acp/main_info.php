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

namespace imcger\collapsequote\acp;

/**
 * Collapse Quote ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\imcger\collapsequote\acp\main_module',
			'title'		=> 'ACP_COLLAPSEQUOTE_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_COLLAPSEQUOTE_SETTINGS',
					'auth'	=> 'ext_imcger/collapsequote && acl_a_board',
					'cat'	=> array('ACP_COLLAPSEQUOTE_TITLE'),
				),
			),
		);
	}
}
