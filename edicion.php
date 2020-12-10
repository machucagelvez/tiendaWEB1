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
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand" href="index.html">
                <img src="https://raw.githubusercontent.com/machucagelvez/imagenesLaMachuca/e50befdbb6f5a29635ba9dd8f14343c7d12d013e/logo.svg" width="90" height="90" alt="logo" loading="lazy">
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

    <main class="fondo">
    
      <?php
        include("BaseDatos.php");
        $transaccion = new BaseDatos;
        $consultaSQL = "SELECT * FROM producto WHERE 1";
        $productos = $transaccion->buscarProducto($consultaSQL);
        //print_r($productos);
      ?>      

        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 justify-content-center">
                <?php foreach($productos as $producto): ?>
                    <div class="card mb-3 mr-2 ml-2 fondoCard" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                            <img src="<?= $producto["imagen"] ?>" class="card-img" alt="imagenProducto">
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $producto["nombre"] ?></h4>
                                    <h4 class="card-title">$<?= $producto["precio"] ?></h4>
                                    <p class="card-text"><?= $producto["descripcion"] ?></p>
                                    <!--<p class="card-text"><small class="text-muted">Marca</small></p>-->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminar<?= $producto["idProducto"] ?>">Eliminar</button>
                                    <div class="modal fade" id="eliminar<?= $producto["idProducto"] ?>" tabindex="-1" aria-labelledby="eliminarProducto" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning">
                                                    <h5 class="modal-title font-weight-bold" id="eliminarProducto">Eliminar Producto</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body fondo">
                                                    <p>Se va a eliminar el siguiente producto:</p>
                                                    <ul>
                                                        <li><strong>Nombre:</strong> <?= $producto["nombre"] ?></li>
                                                        <li><strong>Precio:</strong> $<?= $producto["precio"] ?></li>
                                                        <li><strong>Descripción:</strong> <?= $producto["descripcion"] ?></li>                                                        
                                                    </ul>
                                                </div>
                                                <div class="modal-footer bg-dark">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                                    <a href="borrarProducto.php?id=<?= $producto["idProducto"] ?>" class="btn btn-outline-success">Aceptar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?= $producto["idProducto"] ?>">Editar</button>
                                    <div class="modal fade" id="editar<?= $producto["idProducto"] ?>" tabindex="-1" aria-labelledby="edicionProducto" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning">
                                                    <h5 class="modal-title font-weight-bold" id="edicionProducto">Editar Producto</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body fondo">
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
                                                        <button type="submit" class="btn btn-dark" name="botonEditar">Guardar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>      
            </div>       
        </div>
        

      

    </main>

    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-3 text-right mt-2">
                    <address>
                        Cerveza Artesanal La Machuca <br>
                        Todos los derechos reservados <br>
                        Envigado, 2020
                    </address>                  
                </div>
                <div class="col-12 col-md-3 text-md-left text-right mb-2">
                    <a href="https://www.instagram.com/lamachucacervezaartesanal/" class="mr-2" target="_blank">
                        <img src="https://img.icons8.com/fluent/36/000000/instagram-new.png"/>
                    </a>
                    <a href="https://www.facebook.com/LaMachucaCerveza/" class="mr-2" target="_blank">
                        <img src="https://img.icons8.com/material-rounded/36/4a90e2/facebook-circled.png"/>
                    </a>
                    <a href="https://twitter.com/fabianmachuca" target="_blank">
                    <img src="https://img.icons8.com/fluent/36/4a90e2/twitter.png"/>
                    </a>
                </div>
            </div>
        </div>    
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>