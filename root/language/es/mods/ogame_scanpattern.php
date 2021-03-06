<?php
/**
*
* groups [Spanish]
*
* @package - OGame-Mod
* @copyright (c) Un1matr1x ( http://un1matr1x.de/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

// This is for OGame.com.es

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Recursos.en(.){1,25}\[(.+?)contra-espionaje(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metal).{1,}(Cristal)/",
	'OG_SECOND_LINE'				=> "/(Deuterio).{1,}(Energía)/",

	'OG_ACTIVITY'					=> "/(Actividad)\b(?!( significa| en))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Actividad significa[^\.]*\./",
	'OG_BUILD'						=> "/(Edificio)\b/",
	'OG_CHANCE'						=> "/(Posibilidades)\b(.*)/",
	'OG_DEFFENCE'					=> "/(Defensa)\b/",
	'OG_FLEET'						=> "/(Flotas)\b/iu",
	'OG_HEADER'						=> "/(Recursos en .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Tu sonda .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Tu sonda .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(?<!de )(Investigación)\b/",
));
?>