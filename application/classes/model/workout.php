<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Workout extends ORM
{
	protected $_table_name = 'Workout';
	
	protected $_primary_key = 'id';
	
	public function rules()
	{
		return array(
				`id` => array(
						array('not_empty'),
				),
				'name' => array(
						array('not_empty'),
						array('max_length', array(':value', 100)),
				),
		);
	}
}