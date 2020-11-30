<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de  Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand" href="index.html">
                <img src="img/logo.svg" width="100" height="100" alt="" loading="lazy">
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
            </div>
          </nav> 
    </header>

    <main>

        <div class="container">
            <div class="row justify-content-center mt-2 mb-2">
                <h3 class="text-center">Ingrese el producto a registrar:</h3>
            </div>
            <form action="registrarProducto.php" method="POST">
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" class="form-control" name="nombre">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Marca</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" class="form-control"name="marca">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="number" class="form-control" name="precio">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Imagen</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" class="form-control" name="imagen">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10 col-md-4">
                        <textarea name="descripcion" id="" cols="47" rows="4"></textarea>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-4">
                        <button type="submit" class="btn btn-info btn-block" name="botonRegistrar">Registrar</button>
                    </div>
                </div>
                
                
            </form>
        </div>

    </main>

    <footer>
    
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>