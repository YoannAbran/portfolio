<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', 'root', null);
    foreach($dbh->query('SELECT * from tests') as $row) {
        print_r($row);
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
