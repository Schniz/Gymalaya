<?php defined('SYSPATH') or die('No direct script access.');

/**
 * RESTful web service library.
 *
 * @package    jerfowler/REST
 * @author     Jeremy Fowler
 * @copyright  (c) 2012 Jeremy Fowler
 * @license    http://www.opensource.org/licenses/BSD-3-Clause
 */

// Basic catch-all route for REST controller, action == model
Route::set('api', 'api((/<model>(/<id>)(.<content_type>)))')
	->defaults(array(
		'controller' => 'rest',
		'action' => 'restapi',
		'content_type' => 'json'
	));
