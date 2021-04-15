<?php

namespace App\Core;

class Database
{

	protected $db;

	//Connexion à la base de données
	public function __construct()
	{
		try{
			
			$this->db = new \PDO("mysql:host=database;dbname=mvcdocker2;port=3306","root","password");
			
			$this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    		$this->db->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);

		}catch(\Exception $e){

			die("Erreur SQL : ".$e->getMessage());

		} 

	}


	//Insérer en base de données l'objet
	//Ou le mettre à jour (INSERT ou UPDATE)
	public function save() 
	{
		//Construire de manière dynamique ma requête SQL
		//exemple générer INSERT INTO gkvw0_user (firstname, lastname, email, pwd) VALUES (......);

		$table = get_called_class();

		//si l'id n'est pas null alors ce n'est pas un INSERT que l'on doit faire mais un UPDATE

		//attention à utiliser la notion PREPARE de PDO.

	}

}


