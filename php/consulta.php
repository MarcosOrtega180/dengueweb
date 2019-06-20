<?php
require ("conection.php");
$result = pg_query($con, "SELECT * FROM hightcharts");
if (!$result) {
    echo "Ocurrió un error.\n";
    exit;
}


$arr = pg_fetch_array($result, 0, PGSQL_NUM);
?>
