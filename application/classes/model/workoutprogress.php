<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Workoutprogress extends ORM
{
	protected $_table_name = 'Workoutprogress';
	
	protected $_primary_key = '_id';
	
	public function rules()
	{
		return array(
				'_id' => array(
						array('not_empty'),
				),
				'workout' => array(
						array('not_empty'),
				),
				`exercise` => array(
						array('not_empty'),
						array('max_length', array(':value', 100)),
				),
				`datecomplete` => array(
						array('not_empty'),
				),
				`weight` => array(
				),
				`repeats` => array(
				),
				`sets` => array(
				),
				`worker` => array(
						array('not_empty'),
				),
		);
	}
}