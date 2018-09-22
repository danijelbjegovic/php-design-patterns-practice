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

$config = [
	'aws' => [
		'key' 		  => '123',
		'private_key' => 'abc'
	],
	'db'  => [
		'user' 		=> 'danijel',
		'password' 	=> 'foo'
	]
];


// This would be defined all in like a services.php file
$di = new \DependencyInjector();

$di->register('aws', function() use ($config){
		$obj = new \stdClass();
		$obj->name = 'aws';

		$obj->key = $config['aws']['key'];
		$obj->private_key = $config['aws']['private_key'];

		return $obj;
	});

$di->register('database', function() use ($config){
		$obj = new \stdClass();
		$obj->name = 'database';
		
		$obj->user = $config['db']['user'];
		$obj->password = $config['db']['password'];
		
		return $obj;
	});
	
	
// this would be called where you need it
$aws = $di->getService('aws');
$db = $di->getService('database');

echo PHP_EOL;
echo $aws->key;

echo PHP_EOL;
echo $db->user;

echo PHP_EOL;