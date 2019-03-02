<!DOCTYPE html>
<html>
<head>
	<title>FICHE D'INFORMATIONS</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	form{
		background-color: white;
        width: 50%;
	}
    label{
    	text-align: center;
    	text-align: none;
    }
    legend{
    	background-color: blue;
    }
    footer{
    	text-align: center;
    	background-color: rgb(0, 42, 50);
    }
    body{
    	background-color: rgb(25, 49, 15);
    	background-image: url(1338392701_45226.jpg);
    	background-repeat: no-repeat;
		background-size: 150%;
    }

    img{
    	font-size: 100%;
     }

</style>
<body>

	<div align="center">
	<form method="POST" action="recueil.php">
		<legend><br> VOS INFORMATIONS <br><br></legend>
		<fieldset>
		<table>
		<img src="téléchargé.png" width="15%" height="10%"><br><br><br>

		<label for="Prénom"><small>Prénom:</small></label>
		<input type="text" name="Prénom" placeholder="Votre Prénom"><br><br><br>

		<label for="Nom"><small> Nom:</small></label>
		<input type="text" name="Nom" placeholder="Votre Nom"><br><br><br>

		<label for="Email"><small> Email: </small></label>
        <input type=Email" id="Email" name="Email" placeholder="malickkebe83@gmail.com"><br><br><br>

        <label for="password"><small> Mot de passe: </small></label>
        <input type="password" name="mpd1" placeholder="Mot de passe"><br><br><br>

        <label for="password"><small>Confirmer: </small></label>
        <input type="password" name="mpd2" placeholder="Confirmer passe"><br><br><br>
        <label for="Téléphone"> <small>Téléphone: </small></label>
		<input type="text" name="Téléphone" placeholder=" 77 532 34 50"><br><br><br>
        <label for="Date"> <small>Date de naissance: </small></label>
		<input type="text" name="Date" placeholder=" 8/18/1997"><br><br><br>

		<label for="ids"> <small>Identifiant Slack: </small></label>
		<input type="text" name="ids" placeholder=" nom@slack.com "><br><br><br>
		<input type="submit" name="valider" align="rigth">
        </table>
	</form></fieldset></div>
	<footer width: 100% ><hr> 
	<p>Pour plus d'informations contactez-nous sur</p>
	<p>malickkebe83@gmail.com    ou  le 77 532 34 50 </p><br><hr>
	</footer>
</body>
</html>