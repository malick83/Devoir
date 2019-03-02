<!DOCTYPE html>
<html>
<meta charset="utf-8">

<style type="text/css">
	body{
		background-color: rgb(10, 45, 48);
	}
	div, h2 {
		text-align: center;
	}
	table{
		 width: 50%;
		 border-color: blue;
	}
	fieldset{
		background-image: url(hebus_1280x1024_1551486152_4272.jpg);
		background-repeat: no-repeat;
		background-size: 120%;
	}
</style>
<head>
	<title>COORDONEES PERSONNELLES</title><br><br>
	<h2>LES INFORMATIONS DONNEES PAR L'UTILISATEUR</h2><br><br>
</head>

<body>
<fieldset>
<table>
<div><br>
<?php
	if(isset($_POST['Prénom'])){
	 echo "Prénom :";
	 echo "  ";
     echo $_POST['Prénom'] ;
} ?>  <br><br><br>
<?php
if(isset($_POST['Nom'])){
	 echo "Nom :";
	 echo "  ";
     echo $_POST['Nom'] ; 
} ?>  <br><br><br>
<?php
if(isset($_POST['Email'])){
	 echo "Votre email :";
	 echo "  ";
     echo $_POST['Email'] ; 
} ?>  <br><br><br>
<?php
if(isset($_POST['mpd1']) == isset($_POST['mpd2'])){
	 echo "mot de passe correcte :";
	 echo "  ";
     echo "*******" ; 
}
else if ( (isset($_POST['mpd1'])) !=  (isset($_POST['mpd2'])) ) {

	echo "Mot de passe incorrecte";
}
 ?>  <br><br><br>
<?php
if(isset($_POST['Téléphone'])){
	echo "Numero de Téléphone :";
	echo "  ";
    echo $_POST['Téléphone'] ;
} ?> <br><br><br>
<?php
if(isset($_POST['Date'])){
	echo "Date de naissance:";
	echo "  ";
    echo $_POST['Date'] ;
} ?> <br><br><br>
<?php
if(isset($_POST['ids'])){
	echo "Identifiant Slack :";
	echo "  ";
    echo $_POST['ids'] ;
} ?><br><br><br>
<h2>INFORMATIONS ENVOYEES<br><br></h2><br>
</div>
</table>
</body>
</fieldset>
</html>