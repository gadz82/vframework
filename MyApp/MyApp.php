<?php
namespace MyApp
{
	use MyApp\Interfacemodel\Controller as Controller;
	use Slim\Slim;

	class MyApp implements Controller{
		
		protected $app;
		
		public function register(){
			
		}
		
		public function __construct(Slim $app){
			$this->app = $app;
			echo 'ciao';
		}
		
		public function init(){
			$this->get();
			$this->getOther();
			$this->dependency_injection();
		}

		public function get(){
			new Test\Obj();
			
		}
		
		protected function getOther(){
			new Nuovo\Object();
		}
		
		protected function dependency_injection(){
			new Dependency\Puppa(new Test\Obj());
		}
	}
	
}