<?php
include "db.php";

$sql = "SELECT * FROM materias";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>

<title>Materias</title>

<style>

body{
font-family: Arial;
background: linear-gradient(135deg,#1e3c72,#2a5298);
padding:40px;
}

table{

width:80%;
margin:auto;
background:white;
border-collapse:collapse;
box-shadow:0px 10px 30px rgba(0,0,0,0.3);

}

th,td{

padding:15px;
border:1px solid #ddd;
text-align:center;

}

th{

background:#1e3c72;
color:white;

}

h2{

text-align:center;
color:white;
margin-bottom:20px;

}

</style>

</head>

<body>

<h2>Lista de Materias</h2>

<table>

<tr>

<th>ID</th>
<th>Nombre</th>
<th>Docente</th>
<th>Grado</th>

</tr>

<?php

while($row = $result->fetch_assoc()){

echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['nombre']."</td>";
echo "<td>".$row['docente']."</td>";
echo "<td>".$row['grado']."</td>";
echo "</tr>";

}

?>

</table>

</body>

</html>