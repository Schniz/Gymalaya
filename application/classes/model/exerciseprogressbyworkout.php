<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Exerciseprogressbyworkout extends ORM
{
	protected $_table_name = 'Exerciseprogressbyworkout';
	
	protected $_primary_key = 'id';
	
	public function rules()
	{
		return array(
				'id' => array(
				),
				'workoutid' => array(
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
		);
	}
}