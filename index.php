<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de  Productos</title>
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
                    <li class="nav-item active">
                    <a class="nav-link" href="index.php">Registro<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
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

        <div class="container">
            <div class="row justify-content-center mb-2">
                <h3 class="text-center">Ingrese el producto a registrar:</h3>
            </div>
            <form action="registrarProducto.php" method="POST">
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Nombre:</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" class="form-control" name="nombre">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Marca:</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" class="form-control"name="marca">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Precio:</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="number" class="form-control" name="precio">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Imagen:</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" class="form-control" name="imagen">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Descripción:</label>
                    <div class="col-sm-10 col-md-4">
                        <textarea name="descripcion" rows="3"></textarea>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-2 mb-3">
                        <button type="submit" class="btn btn-dark btn-block" name="botonRegistrar">Registrar</button>
                    </div>
                </div>
            </form>
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