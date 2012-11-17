<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Workerprogress extends ORM
{
	protected $_table_name = 'Workerprogress';
	
	protected $_primary_key = '_id';
	
	public function rules()
	{
		return array(
				'_id' => array(
				),
				'workerid' => array(
						array('not_empty'),
				),
				`currentdate` => array(
						array('not_empty'),
				),
				`weight` => array(
				),
				`picture` => array(
				),
				`armsize` => array(
						array('max_length', array(':value', 100)),
				),
				`heapsize` => array(
				),
				`asssize` => array(
				),
				`fatprecent` => array(
				),
		);
	}
}