<h1>Hello World</h1>


<?php

$user = 'root';
$pass = '';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=cms', $user, $pass);

    echo 'Wszysko jest OK ';
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>

