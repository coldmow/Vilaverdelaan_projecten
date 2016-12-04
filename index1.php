<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
	
	<div class="registreer">
		<label for="">Gebruikersnaam</label>
		<input type="text" class="GebN">
		<br>
		<label for="">Wachtwoord</label>
		<input type="text" class="WW">
		<input type="button" name="" value="">
	</div>
	
	
	<?php

	?>
	<script>
		GebN	=	document.querySelector(".GebN");
		WW 		=	document.querySelector(".WW");

		function newUser(gebruikersnaam,wachtwoord){
			this.usernames = [];
			this.passwords = [];
			this.toevoegen = function(gebruikersnaam,wachtwoord){
				this.usernames.push(gebruikersnaam);
			};
		}

	</script>
</body>

</html>