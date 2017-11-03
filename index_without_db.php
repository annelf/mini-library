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
                $champs = count($tab);//nombre de champ dans la ligne en question
                $ligne ++;
            //affichage de chaque champ de la ligne en question
                for($i=0; $i<1; $i ++)
                {
                    echo '<tbody><td>' . utf8_encode($tab[0]) . '</td>'
                        . '<td>' . utf8_encode($tab[1]) . '</td>'
                        . '<td>' . utf8_encode($tab[2]) . '</td>'
                        . '<td>' . utf8_encode($tab[3]) . '</td></tbody>';
                }
            }
            /*$file = "bibliotheque.csv";
            $taille = 1024;
            $delimiteur = ":";
            if($fp = fopen($file,"r")) {
                while ($ligne = fgetcsv($fp, $taille, $delimiteur)) {
                    foreach($ligne as $elem) {
                        echo utf8_encode($elem) . "<br />";
                    }
                }
                fclose ($fp);
            } else {
                echo "Ouverture impossible.";
            }
            echo 'TOTO TEST';*/
            /*$title = 'Collines Noires'; //Je met "Collines Noires" en dur mais il faut que tu remplaces ça par un $_GET["title"] par exemple
            $book = null;
            if (($handle = fopen("bibliotheque.csv", "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { // boucle dans chaque ligne du csv (boucle dans chaque livre)
                    $num = count($data);  // compte le nombre de donnée par livre (parfois dans le csv un livre à plusieurs Tome (à vérifier mais c'est comme ça que je le comprend))
                    for ($c=0; $c < $num; $c++) { // Boucle sur toutes les données du livre actuel (tous les tomes)
                        $book_data = explode(';', $data[$c]);
                        $actual_book = array(
                            'title' => $book_data[0],
                            'author' => $book_data[1],
                            'date' => $book_data[2],
                            'genre' => $book_data[3],
                        );
                        if ($actual_book['title'] == $title) { // pour regarder si le titre du livre actuel dans la boucle == le titre de $title
                            $book = $actual_book; // là dans $book t'as "Collines Noires;Dan Simmons;2014;Science Fiction"
                            break 2; // le 2 c'est pour sortir du "for" ET du "while"

                        }
                    }
                }
                fclose($handle);
            }
            foreach ($book as $infoBook) {
                //var_dump($infoBook);

                $url = urlencode(urlencode($infoBook));
                var_dump($url);
                //echo $infoBook; // un array dans lequel il y a un titre, un auteur, une date et un genre du livre recherché

            }*/
            ?>
                <a href="<?php $url; ?>"
            </tr>
            </thead>
        </table>
    </div>
</div>
</body>
</html>
