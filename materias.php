<?php
include "db.php";

$sql = "SELECT id,nombre,docente FROM materias";
$result = $conn->query($sql);

$materias = [];

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        $materias[] = $row;
    }

}

echo json_encode($materias);

?>