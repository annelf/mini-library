<?php
include('header.php');
$rawAuteur = $_GET['auteur'];
$auteur = str_replace("+", " ", $rawAuteur);
?>

<body>
<div class="container">
    <h2><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> Vous avez choisi l'auteur : <?php echo $auteur ?></h2>
    <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover">
            <tbody>
            <tr>
                <th>Auteur</th>
                <th>Titre</th>
            </tr>
            <?php
            $ligne = 1;
            $books = array();
            $fic = fopen("./files/bibliotheque.csv", "r");
            while (($tab = fgetcsv($fic, 1024, ";")) !== FALSE) { // boucle dans chaque ligne du csv (boucle dans chaque livre)
                $num = count($tab);
                $ligne ++;
                for ($i=0; $i < 1; $i++) { // Boucle sur toutes les données du livre actuel (tous les tomes)
                    if(in_array($auteur, $tab, true)){
                        echo '<tr><td>' . utf8_encode($tab[0]) . '</td>'
                            . '<td>' . utf8_encode($tab[2]) . '</td></tr>';
                    }
                }
            }
            fclose($fic);
            ?>
            </tbody>
        </table>
        <p style="font-size: 1.5em;">Pour retourner à la liste des livres, cliquer ici : <a href="index_without_db.php" ><span class="glyphicon glyphicon-menu-hamburger"></span></a></p>
    </div>
</body>

