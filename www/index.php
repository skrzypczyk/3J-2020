<?php 
 //declare(strict_types = 1);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Titre de la page</title>
	<meta name="description"  content="Ceci est ma super page">
</head>
<body>

	<header>
		<h1>Welcome</h1>
		<nav></nav>
	</header>
	<section>

		<?php 
			//Commentaire sur une ligne
			/*
				sur pls lignes
			*/
			/* 
				types: 
				-null
				-boolean
				-int
				-string
				-float
			*/

			//Déclarée et typée -string
			/*
				Convention de nommage :
				- Camel Case 
				- ne commence pas par un chiffre
				- en anglais
			*/	

			// Variable locale -> Variable globale
			$adult = true;
			$age = 34;
			$size = 1.96;
			$role = null;

			
			$firstname = "Yves"; //Globale (est aussi locale mais elle est accessible dans une fonction que si on va la chercher avec le terme "globale")

			//SUPER GLOBALES
			//Accessible partout
			//Nommage : $_ puis des majuscules  -> $_SESSION
			//Créée et alimentée par le serveur PHP


			//Variables dynamiques

			//$test = "firstname";
			//echo $$test;
			//echo ${$test};
			//echo $firstname;


			//operateurs : + - / * %(reste de la division)

			//Incrémentation 

			//001223234

			//0-1-1-2-5-2-3-9-9
			/*
			$cpt = 0;
			echo $cpt; //0
			//echo --$cpt++; //BUG
			echo --$cpt; //-1
			echo $cpt--; //-1
			echo $cpt; //-2
			echo $cpt-=3; //-5
			echo $cpt+3; //-2
			//echo 2=$cpt; //BUG
			echo 2+$cpt; //-3
			echo $cpt==3; //
			echo $cpt-=4; //-9
			//echo $cpt=$ctp+2; //-2
			echo $cpt++; //-9
			echo $cpt; //-8
			*/

			
			//Concaténation : Addition des chaînes de caractères

			//echo "Bonjour " . $firstname;
			//echo "Bonjour $firstname" ;
			//echo 'Bonjour $firstname' ;


			/* 
			$firstname = "Yves";
			$age = 34;
			$cpt = 3;



			//Afficher la phrase "Dans 3 ans, Yves aura 37 ans"
			echo "Dans ".$cpt." ans, ".$firstname." aura ".($age+$cpt)." ans";
			

			//Constante : une variable qui ne peut pas varier
			define("DB_USER", "root");
			echo PHP_VERSION; //Constante prédéfinies
			echo __LINE__ ; //Constante magique (Dynamique)
			echo __LINE__ ; //Constante magique (Dynamique)
			*/

			//Les tableaux

			//Déclaration d'un tableau en PHP;
			//$student = array();
			//$student = ["Sonny", "LUSCAP", 11];

			//echo $student; ne pas fonctionner pour un tableau
			//var_dump($student);
			//print_r($student);
			//echo "Bonjour ".$student[0];

			/*
			$student = [
							"lastname"=>"MARIE", 
							"firstname"=>"Pierre",
							"average"=>2
						];
			print_r($student);

			//Afficher la phrase "Prénom Nom a une moyenne de 2/20";
			//Pierre Marie a une moyenne de 2/20
			echo $student["firstname"]." ".$student["lastname"]." a une moyenne de ".$student["average"]."/20";



			//Dimension

			$class = [
						0=>[ "lastname"=>"MARIE", "firstname"=>"Pierre","average"=>2],
						

						1=>[ 
							"lastname"=>"MARIE", 
							"firstname"=>["Pierre", "Luc"],
							"average"=>2
						],


						2=>[ "lastname"=>"MARIE", "firstname"=>"Pierre","average"=>2],
						3=>[ "lastname"=>"MARIE", "firstname"=>"Pierre","average"=>12],
					];

			echo $class[1]["firstname"][1];
			echo $class[3]["average"];

			$class[1]["firstname"][1] = "Paul";

			$class[1]["firstname"][] = "Jacques";

			echo "<pre>";
			print_r($class);
			echo "</pre>";


			//6D
			$array = [
						[],
						[
							[],
							[],
							[
								[
									[
										[],
										[
											[]
										]
									],
									[]
								]
							]
						]
					];

	
			

			$age = "18";


			if( $age === "18" || $age === 18) {
				echo "Tout juste Majeur";
			} else if ($age > 18) {
				echo "Majeur";
			} else {
				echo "Mineur";
			}
			



			$adult = false;


			if($adult) {
				echo "Vous êtes adulte";
			} else {
				echo "Partez";
			}

			//Condition ternaire
			//instruction (condition)?vrai:faux;
			echo ($adult)?"Vous êtes adulte":"Partez";


			//Null coalescing


			if(!empty($_POST["email"])){
				echo $_POST["email"];
			}else{
				echo "";
			}


			echo (!empty($_POST["email"]))?$_POST["email"]:"";

			
			echo $_POST["email"]??"";



			$role = "Abonné";

			switch ($role) {
				case 'Admin':
					echo "Peut modifier la config";

				case 'Editor':
					echo "Peut modifier le contenu";
					break;
					
				case 'Author':
					echo "Peut modifier le contenu";

				default:
					echo "Peut afficher le site";
					break;
					
			}


		*/


		?>




	</section>
	<footer>
		©Yves SKRZYPCZYK
	</footer>

</body>
</html>