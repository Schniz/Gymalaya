<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Worker extends ORM
{
	protected $_table_name = 'Worker';
	
	protected $_primary_key = 'id';
	
	public function rules()
	{
		return array(
				'id' => array(
						array('not_empty'),
				),
				`firstname` => array(
						array('not_empty'),
						array('max_length', array(':value', 100)),
				),
				`lastname` => array(
						array('max_length', array(':value', 100)),
				),
				`startingdate` => array(
				),
				`reason` => array(
						array('max_length', array(':value', 100)),
				),
				`birthdate` => array(
				),
		);
	}
}