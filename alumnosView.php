<?php
include "db.php";
$sql = "SELECT * FROM materias";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Alumno - Zongolica</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            width: 420px;
            box-shadow: 0px 10px 30px rgba(0,0,0,0.3);
        }
        h2 { text-align: center; color: #1e3c72; margin-bottom: 20px; }
        input, select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #1e3c72;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover { background: #2a5298; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Registro de Alumno</h2>
        <form action="guardarAlumno.php" method="POST">
            <input type="text" name="matricula" placeholder="Matrícula" required>
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            
            <select name="materia" required>
                <option value="">Selecciona una Materia</option>
                <?php while($row = $result->fetch_assoc()): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                <?php endwhile; ?>
            </select>
            
            <button type="submit">Guardar Alumno</button>
        </form>
    </div>
</body>
</html>