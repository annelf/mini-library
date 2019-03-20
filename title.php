<?php
require('param.php');
require('connexion.php');
include('header.php');
    $id = $_GET['id'];
    try {
        $sql = "SELECT * FROM `bibliotheque` WHERE `id` = $id";
        $req = $connexion->query($sql);
        $i = 0;
        foreach ($req as $listeLivre) {
            $i ++;
?>
<body>
    <div class="container">
        <h2><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> Vous avez sélectionné le livre suivant : <?= $listeLivre['titre'] ?></h2>
        <div class="table-responsive-vertical shadow-z-1">
            <table id="table" class="table table-hover">
                <tbody>
                <tr>
                    <th>Son auteur :</th>
                    <td><?= $listeLivre['auteur'] ?></td>
                </tr>
                <tr>
                    <th>L'année où il a été publié :</th>
                    <td><?= $listeLivre['annee'] ?></td>
                </tr>
                <tr>
                    <th>Son genre littéraire :</th>
                    <td><?= $listeLivre['genre'] ?></td>
                </tr>
                </tbody>
                    <?php }
                } catch(Exception $e) {
                    die('Erreur');
                }
                ?>
            </table>
            <p style="font-size: 1.5em;">Pour retourner à la liste des livres, cliquer ici : <a href="index-third-version.php" ><span class="glyphicon glyphicon-menu-hamburger"></span></a></p>
        </p>
    </div>
</body>
