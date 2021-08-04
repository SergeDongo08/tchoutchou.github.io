
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form in Design</title>
	<style>
		#ok{
			margin-left: 30%;
			margin-top: 15%;
			margin-right: 40%;
		}
		.lo{
			margin-left: 40%;
			margin-top: 15%;
			margin-right: 40%;
			background-color: orange;

		}
		.formb{
			margin-left: 30%;
		}
		.dd{
			margin-left: 18%;
		}
		.ii{
			margin-left: 25%;
		}
		body{
			background-image: url(login.png);
		}
		
	</style>
</head>
<body>
	 <form id="ok" method="post" action="tut.php">

           <fieldset class="lo">
                <br><br>
                <p class="formt">
                    <label for="text" class="dd">Nom d'utilisateur</label><br>
                    <input type="text" id="text" name="username" value="" placeholder="Entrez votre Nom" required>
                <p class="formn">
                    <label for="text" class="ii">Mot de Passe</label><br>
                    <input type="password" id="text" name="password" value="" placeholder="Entrez votre Mot de passe" minlength="8" maxlength="15" autocomplete="current-password" required>

                </p><br><br>
                <p class="formb">
                    <input type="submit" id="submit" name="submit" value="Valider">
                </p>
           </fieldset>
           
        </form>
</body>
</html>