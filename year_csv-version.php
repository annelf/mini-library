<?php
include 'header.php';
$year = $_GET['annee'];
?>

<body>
<div class="container">
    <h2><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> Here all the books of
        : <?= $year ?></h2>
    <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover">
            <tbody>
            <tr>
                <th>Name of book</th>
                <th>Authors</th>
            </tr>
            <?php
            $file = fopen("./files/bibliotheque.csv", "r");

            // loop on each line of csv's file
            while (($tab = fgetcsv($file, 1024, ";")) !== FALSE) {

                // loop on all the datas from the chosen year
                for ($i = 0; $i < 1; $i++) {
                    if (in_array($year, $tab, true)) {
                        echo '<tr><td>' . utf8_encode($tab[0]) . '</td>'
                            . '<td>' . utf8_encode($tab[1]) . '</td></tr>';
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

