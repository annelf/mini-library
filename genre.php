<?php
require('param.php');
require('connexion.php');
include('header.php');
$genre = $_GET['genre'];
?>
<body>
<div class="container">
    <h2><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> Voici tous les livres dont le genre littéraire est : <?php echo $genre ?></h2>
    <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover">
            <tbody>
            <tr>
                <th>Auteur</th>
                <th>Titre</th>
            </tr>
            <?php
            try {
            $sql = "SELECT * FROM `bibliotheque` WHERE `genre` = '$genre'";
            $req = $connexion->query($sql);
            $i = 0;
            foreach ($req as $listeGenre) {
            $i ++;
            ?>
            <tr>
                <td><?php echo $listeGenre['auteur'] ?></td>
                <td><?php echo $listeGenre['titre'] ?></td>
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
