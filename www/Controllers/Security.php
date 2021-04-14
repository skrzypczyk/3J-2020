<?php 

namespace App\Controllers;

use App\Core\View;

class Security
{

	public function login() {
		//Afficher la vue login à l'interieur du template front
		$v = new View("Security/login", "front");
	}

	public function logout() {
		echo "Security/logout";
	}

	public function register() {
		$v = new View("Security/register", "front");
	}
	
}




