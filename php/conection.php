<?php
$con = pg_connect("host=localhost port=5454 dbname=comidenco user=postgres password=C0m1d3nc00");
if (!$con) {
    echo "Ocurrió un error.\n";
    exit;
}
?>
