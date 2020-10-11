<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'Views/includes/head.php';?>
	<title> LES SIMPSON </title>

</head>

<body>

	<h1>Liste de tous les personnages</h1>
    <img class="personnage" src="Content/images/personnages.jpeg">
	<ul>

<?php foreach($personnages as $p): ?>


    <li> <?= e($p["Nom"]) ?>  <?= e($p["Prenom"]) ?> </li>

<?php endforeach; ?>


    </ul>
</body>
</html>