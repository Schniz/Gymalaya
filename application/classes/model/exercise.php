<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Exercise extends ORM
{
	protected $_table_name = 'Exercise';
	
	protected $_primary_key = 'id';
	
	public function rules()
	{
		return array(
				'id' => array(
				),
				'name' => array(
						array('not_empty'),
						array('max_length', array(':value', 1000)),
				),
				`muscles` => array(
						array('not_empty'),
						array('max_length', array(':value', 1000)),
				),
				`machine` => array(
						array('not_empty'),
				),
				`difficulty` => array(
						array('not_empty'),
				),
				`description` => array(
						array('max_length', array(':value', 1000)),
				),
				`demonstration` => array(
				),
		);
	}
}
