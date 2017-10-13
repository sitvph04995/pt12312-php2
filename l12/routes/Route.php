<?php 
namespace Route;
/**
* 
*/
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Exception;
class Route
{
	
	public static function Setup($url){
		$router = new RouteCollector();

		$router->get("/", ["App\Controller\HomeController", "index"]);

		$router->get("/admin-user/{userid}", ["App\Controller\HomeController", "adminUser"]);

		
		$router->group(['prefix' => 'thienth'], function($router){

    		$router->get('/', function(){
		        return 'trang chu thienth';
		    });

		    $router->get('products', function(){
		        return 'thienth product management';
		    });

		    $router->get('orders', function(){
		        return 'thienth order management';
		    });
		});

		$dispatcher = new \Phroute\Phroute\Dispatcher($router->getData());

		$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
		    
		// Print out the value returned from the dispatched function
		echo $response;
	}
}

 ?>