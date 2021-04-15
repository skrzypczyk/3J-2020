<?php 

namespace App\Controllers;

use App\Core\View;

class Main
{

	public function default() {

		
		$v = new View("Main/home", "front");
		$v->firstname = "Yves";
		$v->lastname = "SKRZYPCZYK";

	}


	public function page404() {
		echo "Erreur 404";
	}

}

