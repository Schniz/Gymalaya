<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Exercise extends ORM
{
	protected $_table_name = 'Exercise';
	
	protected $_primary_key = 'name';
	
	public function rules()
	{
		return array(
				'name' => array(
						array('not_empty'),
						array('max_length', array(':value', 100)),
				),
				`muscles` => array(
						array('not_empty'),
						array('max_length', array(':value', 100)),
				),
				`machine` => array(
						array('not_empty'),
				),
				`difficulty` => array(
						array('not_empty'),
				),
				`discription` => array(
						array('max_length', array(':value', 100)),
				),
				`demonstration` => array(
				),
		);
	}
}
