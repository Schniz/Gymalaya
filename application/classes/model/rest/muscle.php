<?php
class Model_REST_Muscle implements REST_CORS, REST_Method_Get, REST_Method_Delete, REST_Method_Put, REST_Method_Post {
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
		$model = "muscle";//$rest->param("model");
		$obj = ORM::factory($model, $id);
	
		print_r(json_encode($obj)); 
		
		return $obj;
	}
	
	public  function rest_put(Rest $rest){
	}
	
	public function rest_delete(Rest $rest){
	}
	
	public function rest_post(Rest $rest){
	}
	
	
}