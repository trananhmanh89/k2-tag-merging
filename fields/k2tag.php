<?php

defined('_JEXEC') or die;
JFormHelper::loadFieldClass('list');

class JFormfieldK2tag extends JFormFieldList {

	protected $type = "k2tag";

	protected function getOptions() {
		$q = "SELECT * FROM #__k2_tags";
		$db = JFactory::getDbo()->setQuery($q);
		$tags = $db->loadObjectList();
		$default = new stdClass();
		$default->value = '';
		$default->text = '- Choose a tag -';
		foreach ($tags as &$tag) {
			$tag->value = $tag->id;
			$tag->text = $tag->name;
		}
		$options = array_merge(parent::getOptions(), $tags);
		return $options;
	}

}
