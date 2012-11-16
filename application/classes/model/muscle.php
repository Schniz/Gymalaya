<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Muscle extends ORM
{
	protected $_table_name = 'Muscle';
	
	protected $_primary_key = 'name';
	
	public function rules()
	{
		return array(
				'name' => array(
						array('not_empty'),
						array('max_length', array(':value', 100)),
				),
				`bodypart` => array(
						array('max_length', array(':value', 100)),
				),
				`bodyerea` => array(
						array('max_length', array(':value', 100)),
				),
		);
	}
}