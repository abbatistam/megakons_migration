<?php
include './conexion.php';
$db = getConnection();

header('content-type application/json charset=utf-8');
mysqli_set_charset($db, 'utf8');

$row = array();

$sql = "select v.id_vacante,v.nombre_vacante,v.descripcion_vacante,v.tipo_empleo,v.id_area_vacante,v.lugar,v.salario_minimo,v.salario_maximo,";
$sql .= "a.nombre_area,a.descripcion_area " ;
$sql .= "FROM vacante as v " ;
$sql .= "INNER JOIN areas as a " ;
$sql .= "ON a.id_area = v.id_area_vacante" ;

//$sql . =  "inner join "

/*SELECT 
v.id_vacante,v.nombre_vacante,v.descripcion_vacante,v.tipo_empleo,v.id_area_vacante,v.lugar,v.salario_minimo,v.salario_maximo,
a.nombre_area,a.descripcion_area
FROM `vacante` as v 
INNER JOIN areas as a
ON a.id_area = v.id_area_vacante */


$result = mysqli_query($db, $sql);
$i = 0;
while ($fila = mysqli_fetch_assoc($result)) {
    $row[] = $fila;
    $i++;
}
echo json_encode($row);
mysqli_free_result($result);
mysqli_close($db);