<?php defined('SYSPATH') or die('No direct script access.');

class ORM extends Kohana_ORM {
	public function toArray() {
		return $this->_object;
	}
	
	public function toJSON() {
		return json_encode($this->toArray());
	}
	
	public function __toString() {
		return $this->toJSON();
	}
}
