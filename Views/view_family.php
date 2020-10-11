<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'Views/includes/head.php';?>
	<title> LES SIMPSON </title>
</head>
<body>
	<h1> Famille <?= e($nom) ?> </h1>
    <img  src="Content/images/simpson.gif">

    <ul>

        <?php foreach($personnages as $p): ?>

            <li> <?= e($p["Nom"]) ?>  <?= e($p["Prenom"]) ?> </li>

        <?php endforeach; ?>
    </ul>
</body>
</html>