<?php
include('config.php');

$sql = $dbh->query('SELECT * from tests')->fetchAll();
var_dump($sql);

foreach($sql as $row) {
    print_r($row);
}

?>
