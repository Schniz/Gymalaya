<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Machine extends ORM
{
	protected $_table_name = 'Machine';
	
	protected $_primary_key = '_id';
	
	public function rules()
	{
		return array(
				'_id' => array(
						array('not_empty'),
				),
				'name' => array(
						array('not_empty'),
						array('max_length', array(':value', 100)),
				),
		);
	}
}