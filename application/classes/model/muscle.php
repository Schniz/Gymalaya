<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Muscle extends ORM
{
	protected $_table_name = 'Muscle';
	
	protected $_primary_key = '_id';
	
	public function rules()
	{
		return array(
				'_id' => array(
						array('not_empty'),
				),
				`bodypart` => array(
						array('max_length', array(':value', 100)),
				),
				`bodyarea` => array(
						array('max_length', array(':value', 100)),
				),
		);
	}
}