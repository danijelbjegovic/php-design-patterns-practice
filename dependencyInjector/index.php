<?php


class DependencyInjector
{
	protected $services = [];
	
	public function __construct(){}
	
	
	//Register a new service
	public function register($service_name, callable $callable)
	{

		$this->services[$service_name] = $callable;
	}
	
	public function getService($service_name)
	{
		
		//check if the service exists
		if(!array_key_exists($service_name, $this->services))
		{
			throw new \Exception("The service $service_name does not exist;");
		}
		
		//return the existing service
		return $this->services[$service_name]();
	}
	
	
	
}

// This would be defined all in like a services.php file
$di = new \DependencyInjector();

$di->register('aws', function(){
		$obj = new \stdClass();
		$obj->name = 'aws';
		return $obj;
	});

$di->register('database', function(){
		$obj = new \stdClass();
		$obj->name = 'database';
		return $obj;
	});
	
	
// this would be called where you need it
$aws = $di->getService('aws');
$db = $di->getService('database');

echo PHP_EOL;
echo $aws->name;

echo PHP_EOL;
echo $db->name;

echo PHP_EOL;