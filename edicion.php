<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición/Listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Delius&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning mb-2">
            <a class="navbar-brand" href="index.html">
                <img src="https://raw.githubusercontent.com/machucagelvez/imagenesLaMachuca/e50befdbb6f5a29635ba9dd8f14343c7d12d013e/logo.svg" width="100" height="100" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Registro<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="edicion.php">Edición/Listado</a>
                    </li>                
                </ul>
                <span class="navbar-text">
                    <h4>Administración productos La Machuca</h4>
                </span>
            </div>
        </nav> 
    </header>

    <main>
    
      <?php
        include("BaseDatos.php");
        $transaccion = new BaseDatos;
        $consultaSQL = "SELECT * FROM producto WHERE 1";
        $productos = $transaccion->buscarProducto($consultaSQL);
        //print_r($productos);
      ?>

      <?php foreach($productos as $producto): ?>

        <div class="container">
          
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="<?= $producto["imagen"] ?>" class="card-img" alt="imagenProducto">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title"><?= $producto["nombre"] ?></h4>
                            <h4 class="card-title">$<?= $producto["precio"] ?></h4>
                            <p class="card-text"><?= $producto["descripcion"] ?></p>
                            <!--<p class="card-text"><small class="text-muted">La Machuca</small></p>-->
                            <a href="borrarProducto.php?id=<?= $producto["idProducto"] ?>" class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?= $producto["idProducto"] ?>">Editar</button>
                            <div class="modal fade" id="editar<?= $producto["idProducto"] ?>" tabindex="-1" aria-labelledby="edicionProducto" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="edicionProducto">Editar Producto</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="actualizarProducto.php?id=<?= $producto["idProducto"] ?>" method="POST">
                                                <div class="form-group">
                                                <label>Nombre:</label>
                                                    <input type="text" class="form-control" name="editarNombre" value="<?= $producto["nombre"]?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Marca:</label>
                                                    <input type="text" class="form-control" name="editarMarca" value="<?= $producto["marca"]?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Precio:</label>
                                                    <input type="number" class="form-control" name="editarPrecio" value="<?= $producto["precio"]?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Imagen:</label>
                                                    <input type="text" class="form-control" name="editarImagen" value="<?= $producto["imagen"]?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripción:</label>
                                                    <textarea class="form-control" rows="2" name="editarDescripcion"><?= $producto["descripcion"]?></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-info" name="botonEditar">Guardar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
        

      <?php endforeach ?>

    </main>

    <footer>
    
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>