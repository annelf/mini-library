<html>
<?php
include 'header.php';
?>
<body>
<div class="container">
    <h1 class="text-center"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> An interesting library</h1>
    <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover">
            <thead>
            <tr>
                <?php
                $file = fopen("./files/bibliothèque.csv", "r");
                while ($tab = fgetcsv($file, 1024, ';')) {
                    for ($i = 0; $i < 1; $i++) {
                        // je mets chacun de mes champs dans une variable qui passera en paramètre dans l'url
                        $bookTitles = urlencode(urlencode($tab[0]));
                        $bookAuthors = urlencode(urlencode($tab[1]));
                        $releaseYears = urlencode(urlencode($tab[2]));
                        $literaryGenres = urlencode(urlencode($tab[3]));

                        echo '<tbody><td><a href="title_csv-version.php?titre=' . $bookTitles . '">' . utf8_encode(ucfirst($tab[0])) . '</a></td>'
                            . '<td><a href="author_csv-version.php?auteur=' . $bookAuthors . '">' . utf8_encode(ucfirst($tab[1])) . '</a></td>'
                            . '<td><a href="year_csv-version.php?annee=' . $releaseYears . '">' . utf8_encode(ucfirst($tab[2])) . '</a></td>'
                            . '<td><a href="genre_csv-version.php?genre=' . $literaryGenres . '">' . utf8_encode(ucfirst($tab[3])) . '</a></td></tbody>';
                    }
                }
                fclose($file);
                ?>
            </tr>
            </thead>
        </table>
    </div>
</div>
</body>
</html>
