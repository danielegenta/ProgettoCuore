<?php

#@license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

defined('_JEXEC') or die;

jimport('joomla.application.component.model');
JModelLegacy::addIncludePath(JPATH_SITE.'/components/com_content/models');

class mod_mapHelper{

	public function getPlace($params){

		$things = Array();

		$things['name'] = $params->get('placeName');
		$things['lat'] = $params->get('latitude');
		$things['long'] = $params->get('longitude');
		$things['zoom'] = $params->get('zoom');

		return $things;

	}

	public function getInfo($params){

		$info = Array();

		if($params->get('infoTitle1') && $params->get('info1')){
			$info['info1'] = Array('name' => $params->get('infoTitle1'), 'information' => $params->get('info1'));
		}

		if($params->get('infoTitle2') && $params->get('info2')){
			$info['info2'] = Array('name' => $params->get('infoTitle2'), 'information' => $params->get('info2'));
		}

		if($params->get('infoTitle3') && $params->get('info3')){
			$info['info3'] = Array('name' => $params->get('infoTitle3'), 'information' => $params->get('info3'));
		}

		if($params->get('infoTitle4') && $params->get('info4')){
			$info['info4'] = Array('name' => $params->get('infoTitle4'), 'information' => $params->get('info4'));
		}

		if($params->get('infoTitle5') && $params->get('info1')){
			$info['info5'] = Array('name' => $params->get('infoTitle5'), 'information' => $params->get('info5'));
		}

		if($params->get('infoTitle6') && $params->get('info6')){
			$info['info6'] = Array('name' => $params->get('infoTitle6'), 'information' => $params->get('info6'));
		}

		return $info;

	}

}