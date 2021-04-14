<?php include "header.php"; ?>


<?php

	print_r($_POST);
	
	if(count($_POST) == 5){

	}


?>

<!-- GET | POST -->

<form method="POST" action="">
	<input type="text" name="firstname" placeholder="Prénom" required="required"><br>
	<input type="text" name="lastname" placeholder="Nom" required="required"><br>
	<input type="email" name="email" placeholder="Email" required="required"><br>
	<input type="password" name="pwd" placeholder="Mot de passe" required="required"><br>
	<input type="password" name="pwdConfirm" placeholder="Confirmation" required="required"><br>

	<input type="submit" value="S'inscrire">
</form>



<?php include "footer.php"; ?>


