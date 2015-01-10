<?php

#@license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

defined('_JEXEC') or die;

//include the class of the syndicate functions only once
require_once(dirname(__FILE__).'/helper.php');

// get doc
$doc =& JFactory::getDocument();

//call to the helper functions
$list = mod_mapHelper::getPlace($params);
$info = mod_mapHelper::getInfo($params);

// add stylesheet if they want it
if($params->get('cssOn') == '1'){
	$doc->addStyleSheet(JURI::base(true) . '/modules/mod_map/assets/css/style.css', 'text/css' );
}

// add stylesheet if they want it
if($params->get('ie8support') == '1'){
	$stylelink = '<!--[if lte IE 9]>' ."\n";
	$stylelink .= '<link rel="stylesheet" href="'.JURI::base(true).'/modules/mod_map/assets/css/ie8.css" />' ."\n";
	$stylelink .= '<![endif]-->' ."\n";
 
	$doc->addCustomTag($stylelink);
	//$doc->addStyleSheet(JURI::base(true) . '/modules/mod_map/assets/css/ie8.css', 'text/css' );
}

//add maps scripts
$doc->addScript(JURI::base(true) . '/modules/mod_map/assets/js/build/mod_map.min.js');

//add maps api call
$doc->addScriptDeclaration('
	function loadScript() {
  		var script = document.createElement("script");
  		script.type = "text/javascript";
  		script.src = "http://maps.googleapis.com/maps/api/js?key='.$params->get('api').'&sensor=true&callback=initialize";
  		document.body.appendChild(script);
	}

	window.onload = loadScript;
');

$doc->addScriptDeclaration('
	var c7_zoom_level = '.$list["zoom"].',
	c7_custom_latitude = '.$list["lat"].',
	c7_custom_longitude = '.$list["long"].';
');

//keeps module class suffix even if templateer tries to stop it
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require(JModuleHelper::getLayoutPath('mod_map'));
