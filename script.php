<?php 

defined('_JEXEC') or die;

class plgSystemK2TagMergingInstallerScript {
	function postflight($type, $parent) {
		$element = $parent->getElement();
		$q = 'UPDATE `#__extensions` SET enabled=1 WHERE type="plugin" AND element="'.$element.'"';
		$db = JFactory::getDbo();
		$db->setQuery($q);
		$db->execute();
	}
}