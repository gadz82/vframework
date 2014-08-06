<?php
namespace MyApp\Dependency
{
	use MyApp\Test as Ovp3;
	class Puppa{
				
		public function __construct(Ovp3\Obj $oggetto){
			$oggetto::ciao();
		}
	}
}
