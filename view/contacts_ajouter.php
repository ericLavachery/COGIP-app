<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title></title>
</head>
<body>
    <h1><?= $titre ?></h1>

    	<form action="model/contacts_ajouter.php" method="post">

		<div>
			<label for="nom">Nom : </label>
			<input type="text" name="nom">
		</div>

		<div>
			<label for="prenom">Prenom : </label>
			<input type="text" name="prenom">
		</div>

		<div>
			<label for="telephone">Numéro de téléphone : </label>
			<input type="text" name="telephone">
		</div>

		<div>
			<label for="bas"> email : </label>
			<input type="email" name="email">
		</div>

		<div>
			<label for="societe"> Société : </label>
			<select>
				<?php foreach ($societes as $key => $value){?>
					<option></option>
        			<option><?= $value['nom']?></option>
        		<?php } ?>
			</select>
		</div>

		<div>
			<button type="submit" name="btn"> Ajouter le contact</button>
		</div>
		
	</form>

</body>
</html>

