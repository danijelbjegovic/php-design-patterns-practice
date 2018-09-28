<?php

interface Shape {
	
	public function draw();
	
}

class Position {}

class Rectangle implements Shape {
	
	private $position;
	
	public function __construct(Position $pos){
		$this->position = $pos;
	}
	
	public function draw(){
		echo "Drawing a rectangle";
	}
	
}


class ShapeFactory {
	
	public function create($type){
		
		if($type == "Rectangle"){
			return new Rectangle(new Position);
		}
		
	}
	
}

$factory = new ShapeFactory;

$rect = $factory->create("Rectangle");
echo $rect->draw();