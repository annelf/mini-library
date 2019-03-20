<html>
<?php
include 'header.php';
require 'param.php';
require 'connexion.php';
?>
<body>
<div class="container">
    <h1 class="text-center"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> An interesting library
    </h1>
    <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Release year</th>
                <th>Literary genre</th>
            </tr>
            </thead>
            <tbody>
            <?php
            try {
                $sql = "SELECT * FROM `bibliotheque`";
                $query = $connexion->query($sql);
                $i = 0;
                foreach ($query as $column) {
                    $i++;
                    ?>
                    <tr>
                        <td><a href="title.php?id=<?= $column['id'] ?>"><?= $column['titre']; ?></a></td>
                        <td>
                            <a href="author.php?auteur=<?= $column['auteur'] ?>"><?= $column['auteur']; ?></a>
                        </td>
                        <td><a href="year.php?annee=<?= $column['annee'] ?>"><?= $column['annee']; ?></a>
                        </td>
                        <td><a href="genre.php?genre=<?= $column['genre'] ?>"><?= $column['genre']; ?></a>
                        </td>
                    </tr>
                    <?php
                }
            } catch (Exception $e) {
                die('Something went wrong');
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>