<?php
include "db.php";

$sql = "SELECT * FROM materias";

$result = $conn->query($sql);

$materias = [];

while($row = $result->fetch_assoc()){
    $materias[] = $row;
}

echo json_encode($materias);
?>