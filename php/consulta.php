<?php
require ("conection.php");
$result = pg_query($con, "SELECT * FROM hightcharts order by id");
if (!$result) {
    echo "Ocurrió un error.\n";
    exit;
}


$arr = pg_fetch_array($result, 0, PGSQL_NUM);
$arr2 = pg_fetch_all($result);

//print_r($arr2[0]["id"]);
//print_r($arr2[0]["descripcion"]);
//print_r($arr2[0]["chart_id"]);
//print_r( $arr2[1]["categorias"] );


?>
