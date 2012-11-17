<?php
class Model_REST_Restapi implements REST_CORS, REST_Method_Get, REST_Method_Delete, REST_Method_Put, REST_Method_Post {
	/**
	 * Cross-Origin Resource Sharing
	 */
	public function rest_cors(Rest $rest)
	{
		$origin = $rest->request()->headers('Origin');
		$rest->cors(array('origin' => $origin, 'creds' => 'true'));
	}

	public function rest_options(Rest $rest)
	{
		$rest->send_code(200);
	}

	/**
	 * Select a husham
	 * (non-PHPdoc)
	 * @see REST_Method_Get::rest_get()
	 */
	public function rest_get(Rest $rest)
	{
		$id = $rest->param("id");
		$model = $rest->param("model");
		$rest->validate(!is_null($model), "Please choose a model", "Stop ruining our system!");
		
		if ($id !== NULL) {
			$muscle = ORM::factory($model, $id);
		} else {
			$muscle = ORM::factory($model)->find_all()->as_array();
		}
			
		return $muscle;
	}
	
	public  function rest_put(Rest $rest){
		$id = $rest->param("id");
		$model = $rest->param("model");
		$rest->validate(!is_null($model), "Please choose a model", "Stop ruining our system!");
		
		$muscle = ORM::factory($model, $id);
		$data = $rest->body("json");
		foreach ($data as $key => $value) {
			$muscle->$key = $value;
		}
		return $muscle->update();
	}
	
	public function rest_delete(Rest $rest){
		$id = $rest->param("id");
		$model = $rest->param("model");
		$rest->validate(!is_null($model), "Please choose a model", "Stop ruining our system!");
		
		$obj = ORM::factory($model, $id);
		return $obj->delete();
	}
	
	public function rest_post(Rest $rest){
		$model = $rest->param("model");
		$muscle = ORM::factory($model);
		$rest->validate(!is_null($model), "Please choose a model", "Stop ruining our system!");
		
		$data = $rest->body("json");
		
		foreach ($data as $key => $value) {
			$muscle->$key = $value;
		}
		
		
		return $muscle->save();
	}
	
	
}