<?php
	
	interface Vehicle {
		public function set_num_of_wheels($wheels);
		public function  set_num_of_passengers($passengers);
		public function  has_gas($gas);
	}


	abstract class AbstractFactory {

	    public static function getFactory($vehice) {

	        switch ($vehice) {

	            case 1:

	                return new Car();

	            case 2:

	                return new Plane();

	        }


	    }


	}


	class Car implements Vehicle{ 
  		
  		private $wheels;
		private $passengers;
		private $gas;
	    public function set_num_of_wheels($wheels){ 
	        $this->wheels = $wheels;
	    } 
	  
	    public function set_num_of_passengers($passengers){ 
	        $this->passengers = $passengers;
	    } 
	    public function  has_gas($gas){
	    	$this->gas = $passengers;
	    }
	}  


	class Plane implements Vehicle{ 
  		
  		private $wheels;
		private $passengers;
		private $gas;
	    public function set_num_of_wheels($wheels){ 
	        $this->wheels = $wheels;
	    } 
	  
	    public function set_num_of_passengers($passengers){ 
	        $this->passengers = $passengers;
	    } 
	    public function  has_gas($gas){
	    	$this->gas = $passengers;
	    }
	}  

	$obj = AbstractFactory::getFactory(1);
	$obj = AbstractFactory::getFactory(2);
	  
	
	


?>
