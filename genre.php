<?php
require 'param.php';
require 'connexion.php';
include 'header.php';
$genre = $_GET['genre'];
?>
<body>
<div class="container">
    <h2><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> Here the literary genre you chose : <?php echo $genre ?></h2>
    <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover">
            <tbody>
            <tr>
                <th>Author</th>
                <th>Title</th>
            </tr>
            <?php
            try {
            $sql = "SELECT * FROM `bibliotheque` WHERE `genre` = '$genre'";
            $query = $connexion->query($sql);
            $i = 0;
            foreach ($query as $listGenre) {
            $i++;
            ?>
            <tr>
                <td><?php echo $listGenre['auteur'] ?></td>
                <td><?php echo $listGenre['titre'] ?></td>
            </tr>
            </tbody>
            <?php }
            } catch (Exception $e) {
                die('Something went wrong');
            }
            ?>
        </table>
        <p style="font-size: 1.5em;">To return to the list click here : <a href="index.php"><span
                        class="glyphicon glyphicon-menu-hamburger"></span></a></p>
        </p>
    </div>
</body>
