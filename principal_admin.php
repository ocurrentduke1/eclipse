<?php
include("com.php");

$sql="SELECT * FROM productos";
$query= mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>pagina Administrador</title>
</head>
<body>
    <header>.
        <a href="./eclipse.html"><center><img src="./imagenes/logo_iconos/logo_eclipse.jpeg" width="400" height="75"></center></a>
    </header>
    <div class="container_productos mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>registro de productos</h1>
                    <form action="productos.php" method="post">
                        <input type="text" class="form-control mb-3" name="Tipo" id="Tipo" required="obligatorio" placeholder="Tipo de producto">
                        <input type="text" class="form-control mb-3 "name="nombre" id="nombre" required="obligatorio" placeholder="nombre de producto">
                        <input type="text" class="form-control mb-3 "name="Precio" id="Precio" required="obligatorio" placeholder="Precio">
                        <input type="text" class="form-control mb-3 "name="Stock" id="Stock" required="obligatorio" placeholder="Stock">
                        <input type="text" class="form-control mb-3 "name="imagen" id="imagen" required="obligatorio" placeholder="imagen de producto">

                        <input type="submit" class="btn btn-primary">
                    </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>id</th>
                            <th>Tipo</th>
                            <th>nombre</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>imagen</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th> <?php echo $row['id']?></th>
                                <th> <?php echo $row['Tipo']?></th>
                                <th> <?php echo $row['nombre']?></th>
                                <th> <?php echo $row['Precio']?></th>
                                <th> <?php echo $row['Stock']?></th>
                                <th> <?php echo $row['imagen']?></th>
                                <th><a href="actualizar.php?ID= <?php echo $row['id'] ?>" class="btn btn-info">editar</a></th>
                                <th><a href="eliminar.php?ID= <?php echo $row['id'] ?>" class="btn btn-info">eliminar</a></th>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>