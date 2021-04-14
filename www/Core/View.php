<?php 

namespace App\Core;

class View
{
	private $template;
	private $view;

	public function __construct ($view, $template="back") {
		$this->setTemplate($template);
		$this->setView($view);
	}


	public function setTemplate($template){
		//Ici nous n'aurons que front ou back
		if( file_exists("Views/Templates/".$template.".tpl.php")){
			$this->template = "Views/Templates/".$template.".tpl.php";
		}else{
			die("Le template ".$template." n'existe pas ");
		}
	}

	public function setView($view){
		
		//exemple View/Security/login.view.php
		if( file_exists("Views/".$view.".view.php")){
			$this->view = "Views/".$view.".view.php";
		}else{
			die("La vue ".$view." n'existe pas ");
		}
	}

	public function __destruct(){
		require $this->template;
	}

}