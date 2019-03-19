<?php

$param = false;

// We get the content of the csv file
$books = array_map(function($v){return str_getcsv($v, ";");}, file('bibliothèque.csv'));

// We create an associative array that has the columns as keys
array_walk($books, function(&$a) use ($books) {
    $a = array_combine($books[0], $a);
});

// We remove the first line to get the header columns
$header = array_shift($books);

// If we have parameters, we need to find the correct keys
if(isset($_GET["type"]) && isset($_GET["value"])){

    $param = true;

    //We get the keys corresponding to the current filter
    $keys = array_keys(array_column($books, $_GET["type"]), $_GET["value"]);

    //We only get the books needed;
    $books = array_intersect_key($books, array_flip($keys));
}

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Library</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">Library</h1>
                    <?php if($param): ?>
                        <h2><?= ucfirst($_GET["type"]); ?> : <?= $_GET["value"]?></h2>
                        <p><a href="index-third-version.php">< Back to homepage</a></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <?php foreach($header as $title): ?>
                                    <th><?= ucfirst($title) ?></th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($books as $book): ?>
                            <tr>
                                <?php foreach($book as $title => $value): ?>
                                    <td>
                                        <a href="index-third-version.php?type=<?= $title; ?>&value=<?= $value; ?>"><?= $value; ?></a>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </body>
</html>