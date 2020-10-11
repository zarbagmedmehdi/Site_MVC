<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'Views/includes/head.php';?>
	<title> LES SIMPSON </title>
</head>
<body>

    <h1>Bienvenue sur les site des Simpson !!!</h1>
    <img src="Content/images/familia-simpson.png" />
    <p>Vous pouvez afficher la liste des tous les personnages des Simpson répertoriés en cliquant <a href="?controller=list&action=all">ici</a>.</p>
    <p> Veuillez sinon remplir le formulaire pour afficher uniquement les membres d'une même famille</p>
    <form action="" method="get">

        <p>Famille <input type="text" name="nom"/> <input type="submit" value="Afficher"></p>
        <input type="hidden" name="controller" value="list">
        <input type="hidden" name="action" value="family">

    </form>
</body>
</html>