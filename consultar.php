<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Consultar Eventos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">Gestión de Eventos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="insert.php">Insertar Evento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consultar.php">Consultar Eventos</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Consultar Eventos</h2>
                <?php
                $sql = "SELECT id, nombre, apellido, fecha FROM eventos";
                $result = $conexion->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table class='table'><thead class='thead-light'><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Fecha</th><th>Acciones</th></tr></thead><tbody>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"]. "</td><td>" . $row["apellido"]. "</td><td>" . $row["fecha"]. "</td>";
                        echo "<td><a href='update.php?id=" . $row["id"] . "' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i> Editar</a></td></tr>";
                    }
                    echo "</tbody></table>";
                } else {
                    echo "0 resultados";
                }

                $conexion->close();
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>