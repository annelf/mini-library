<html>
<?php
include ('header.php');
?>
<body>
<div class="container">
    <h1 class="text-center"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Une bibliothèque fort intéressante</h1>
    <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover">
            <thead>
                <tr>
                <?php
                $ligne = 1;
                $fic = fopen("./files/bibliotheque.csv", "r");
                while($tab=fgetcsv($fic,1024,';'))
                {
                    $champs = count($tab);
                    $ligne ++;
                    for($i=0; $i<1; $i ++)
                    {
                        // je mets chacun de mes champs dans une variable qui passera en paramètre dans l'url
                        $titre = urlencode(urlencode($tab[0]));
                        $auteur = urlencode(urlencode($tab[1]));
                        $annee = urlencode(urlencode($tab[2]));
                        $genre = urlencode(urlencode($tab[3]));

                        echo '<tbody><td><a href="titre_csv.php?titre=' . $titre . '">' . utf8_encode($tab[0]) . '</a></td>'
                            . '<td><a href="auteur_csv.php?auteur=' . $auteur . '">' . utf8_encode($tab[1]) . '</a></td>'
                            . '<td><a href="annee_csv.php?annee='. $annee .'">' . utf8_encode($tab[2]) . '</a></td>'
                            . '<td><a href="genre_csv.php?genre=' . $genre . '">' . utf8_encode($tab[3]) . '</a></td></tbody>';
                    }
                }
                ?>
                </tr>
            </thead>
        </table>
    </div>
</div>
</body>
</html>
