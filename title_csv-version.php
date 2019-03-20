<?php
include 'header.php';
$encodedTitle = urldecode($_GET['titre']);
$title = utf8_encode($encodedTitle);
?>

<body>
<div class="container">
    <h2><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> Here the book you chose
        : <?= $title ?></h2>
    <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover">
            <tbody>
            <tr>
                <th>Name of the book</th>
                <th>Release year</th>
                <th>Literary genre</th>
            </tr>
            <?php
            $file = fopen("./files/bibliotheque.csv", "r");

            // loop on each line of the csv's file
            while (($tab = fgetcsv($file, 1024, ";")) !== FALSE) {

                // loop on all the datas from the chosen book
                for ($i = 0; $i < 1; $i++) {
                    if (in_array($encodedTitle, $tab, true)) {
                        echo '<tr><td>' . utf8_encode($tab[0]) . '</td>'
                            . '<td>' . utf8_encode($tab[2]) . '</td>'
                            . '<td>' . utf8_encode($tab[3]) . '</td></tr>';
                    }
                }
            }
            fclose($file);
            ?>
            </tbody>
        </table>
        <p style="font-size: 1.5em;">To return to the list click here : <a href="index_without_db.php"><span
                        class="glyphicon glyphicon-menu-hamburger"></span></a></p>
    </div>
</body>

