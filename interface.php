<?php
	
	interface Vehicle {
		public function set_num_of_wheels($wheels);
		public function  set_num_of_passengers($passengers);
		public function  has_gas($gas);
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
	  
	$obj = new Car; 
	$obj->set_num_of_wheels('4'); 
	$obj->set_num_of_passengers('111'); 
	var_dump($obj);


	$obj = new Plane; 
	$obj->set_num_of_wheels('3'); 
	$obj->set_num_of_passengers('600'); 
	var_dump($obj);


?>
