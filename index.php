<html>
<?php
include ('header.php');
require('param.php');
require('connexion.php');
?>
<body>
    <div class="container">
        <h1 class="text-center"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Une bibliothèque fort intéressante</h1>
        <div class="table-responsive-vertical shadow-z-1">
            <table id="table" class="table table-hover">
                <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Année de publication</th>
                    <th>Genre littéraire</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    try {
                        $sql = "SELECT * FROM `bibliotheque`";
                        $req = $connexion->query($sql);
                        $i = 0;
                        foreach ($req as $colonne) {
                            $i ++;
                            ?>
                            <tr>
                            <td><a href="titre.php?id=<?php echo $colonne['id'] ?>"><?php echo $colonne['titre']; ?></a></td>
                            <td><a href="auteur.php?auteur=<?php echo $colonne['auteur'] ?>"><?php echo $colonne['auteur']; ?></a></td>
                            <td><a href="annee.php?annee=<?php echo $colonne['annee'] ?>" ><?php echo $colonne['annee']; ?></a></td>
                            <td><a href="genre.php?genre=<?php echo $colonne['genre'] ?>" ><?php echo $colonne['genre']; ?></a></td>
                            </tr>
                        <?php
                        }
                    } catch (Exception $e) {
                        die('Erreur');
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
