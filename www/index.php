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


			$firstname = "Yves";
			$age = 34;
			$cpt = 3;

			//Afficher la phrase "Dans 3 ans, Yves aura 37 ans"

		?>




	</section>
	<footer>
		©Yves SKRZYPCZYK
	</footer>

</body>
</html>