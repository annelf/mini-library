<?php
require('param.php');
require('connexion.php');
include('header.php');
$auteur = $_GET['auteur'];
?>
<body>
<div class="container">
    <h2><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> Vous avez choisi l'auteur : <?php echo $auteur ?> </h2>
    <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover">
            <tbody>
            <tr>
                <th>Titre</th>
                <th>Année de publication</th>
            </tr>
            <?php
            try {
            $id = $_GET['id'];
            $auteur = $_GET['auteur'];
            $sql = "SELECT * FROM `bibliotheque` WHERE `auteur` = '$auteur'";
            $req = $connexion->query($sql);
            $i = 0;
            foreach ($req as $listeAuteur) {
            $i ++;
            ?>
            <tr>
                <td><?php echo $listeAuteur['titre'] ?></td>
                <td><?php echo $listeAuteur['annee'] ?></td>
            </tr>
            </tbody>
            <?php }
            } catch(Exception $e) {
                die('Erreur');
            }
            ?>
        </table>
        <p style="font-size: 1.5em;">Pour retourner à la liste des livres, cliquer ici : <a href="index.php" ><span class="glyphicon glyphicon-menu-hamburger"></span></a></p>
        </p>
    </div>
</body>
