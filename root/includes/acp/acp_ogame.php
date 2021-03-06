<?php
/**
*
* @package - OGame-Mod
* @copyright (c) Un1matr1x ( http://un1matr1x.de/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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
* @package acp
*/
class acp_ogame
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('acp/common');
		//$user->add_lang('mods/acp_info_ogame');
		$this->tpl_name = 'acp_ogame';
		$this->page_title = $user->lang['OGAME'];
		add_form_key('ogame');

		$submit = (isset($_POST['submit'])) ? true : false;
		if ($submit)
		{
			if (!check_form_key('ogame'))
			{
				trigger_error('FORM_INVALID');
			}

			set_config('ogame_spy_conv', request_var('ogame_spy_conv', 0));

			set_config('ogame_mmogame_show', request_var('ogame_mmogame_show', 0));
			set_config('ogame_mmogame_card_style', request_var('ogame_mmogame_style', 1));
			set_config('ogame_mmogame_card_profile_show', request_var('ogame_mmogame_profile_show', 1));
			set_config('ogame_mmogame_card_mouseover_show', request_var('ogame_mmogame_mouseover_show', 1));

			set_config('ogame_cr_hosting_show', request_var('ogame_cr_hosting_show', 0));
			set_config('ogame_cr_hosting_card_profile_show', request_var('ogame_cr_hosting_profile_show', 1));
			set_config('ogame_cr_hosting_card_mouseover_show', request_var('ogame_cr_mouseover_show', 1));
			
			trigger_error($user->lang['OGAME_SAVED'] . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'						=> $this->u_action,
			'S_SPY_CONV'					=> $config['ogame_spy_conv'],
			'MMOGAME_S'						=> $config['ogame_mmogame_show'],
			'MMOGAME_STYLE'					=> $config['ogame_mmogame_card_style'],
			'MMOGAME_PROFILE_SHOW'			=> $config['ogame_mmogame_card_profile_show'],
			'MMOGAME_MOUSEOVER_SHOW'		=> $config['ogame_mmogame_card_mouseover_show'],
			'CR_HOSTING_S'					=> $config['ogame_cr_hosting_show'],
			'CR_HOSTING_PROFILE_SHOW'		=> $config['ogame_cr_hosting_card_profile_show'],
			'CR_HOSTING_MOUSEOVER_SHOW'		=> $config['ogame_cr_hosting_card_mouseover_show'],
		));
	}
}

?>