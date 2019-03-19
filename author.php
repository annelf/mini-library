<?php
require 'param.php';
require 'connexion.php';
include 'header.php';
$author = $_GET['auteur'];
?>
<body>
<div class="container">
    <h2><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> You chose this author
        : <?php echo $author ?> </h2>
    <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover">
            <tbody>
            <tr>
                <th>Title</th>
                <th>Release year</th>
            </tr>
            <?php
            try {
            $id = $_GET['id'];
            $author = $_GET['auteur'];
            $sql = "SELECT * FROM `bibliotheque` WHERE `auteur` = '$author'";
            $query = $connexion->query($sql);
            $i = 0;
            foreach ($query as $listAuthors) {
            $i++;
            ?>
            <tr>
                <td><?php echo $listAuthors['titre'] ?></td>
                <td><?php echo $listAuthors['annee'] ?></td>
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
