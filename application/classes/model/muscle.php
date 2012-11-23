<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Muscle extends ORM
{
	protected $_table_name = 'Muscle';
	
	protected $_primary_key = 'id';
	
	public function rules()
	{
		return array(
				'id' => array(
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