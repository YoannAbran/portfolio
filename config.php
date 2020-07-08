<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;port=3306;dbname=test;charset=utf8','root','');

    // foreach($sql as $row) {
    //     print_r($row);
    // }
    echo "success";
    // $dbh = null;
} catch (PDOException $e) {
    echo "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
