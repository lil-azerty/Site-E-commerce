<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getinfo.php" method="get">
				<label>Nom</label> : <input type="text" required="requis" name="nom"/>

				<label>Prénom</label> : <input type="text" required="requis" name="prenom"/>
				
				<label>Age</label> : <input type="number" required="requis" name="age"/>
				<input type="submit" value="Envoyer" />
	</form>
</body>
</html>