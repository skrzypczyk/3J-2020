<?php 

namespace App\Controllers;

use App\Core\View;
use App\Models\User;

class Security
{

	public function login() {
		//Afficher la vue login à l'interieur du template front
		$v = new View("Security/login", "front");
	}

	public function logout() {
		echo "Security/logout";
		//Redirection sur la home
	}

	public function register() {

		$user = new User();
		$user->setFirstname("Yves");
		$user->setLastname("SKRZYPCZYK");
		$user->setEmail("y.skrzypczyk@gmail.com");
		$user->setPwd("Test1234");


		$user->save();


		$v = new View("Security/register", "front");
	}
	
}




