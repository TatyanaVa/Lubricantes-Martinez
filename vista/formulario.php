<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" type="imagen/x-icon" href="imagenes/aspect-ratio-fill.svg">
    <link rel="stylesheet" href="css/styles.css">
    <title>Registrar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="navegador">Lubricantes Martínez</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="productos.html">Productos</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="servicios.html">Servicios</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="formulario.html">Login</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="registrar.html">Registrar</a></li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="container p-5 border">
            <form>
        <fieldset>
        <legend>Para una tención mas personalizada registrate aqui: </legend>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Contactanos: </label>
            <div class="col-sm-10">
            <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="lubricantesmartinez77@gmail.com">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputNombre" class="form-label mt-4">Nombre: </label required>
            <input type="nombre" class="form-control" id="nombre"  >
            <small id="nombrelHelp" class="form-text text-muted">Ingrese su nombre.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputApellido" class="form-label mt-4">Apellido: </label required>
            <input type="apellido" class="form-control" id="apellido"  >
            <small id="apellidolHelp" class="form-text text-muted">Ingrese su apellido.</small required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Correo Electrónico</label required>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" >
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
        </div>
    </section>
    <script src="js/servicios.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<br>
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Ubicacion Almacén-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Ubicación</h4>
                    <p class="lead mb-0">
                        Av. Fray Vacas Galindo
                        <br />
                        17-58 y Juan Martínez de Orbe
                    </p>
            </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Sucursal</h4>
                <p class="lead mb-0">
                    Calle Puyo 34-121
                    <br />
                    Antigüa vía a Urcuquí
                </p>
                
        </div>
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Horarios de Atención</h4>
                <p class="lead mb-0">
                    Lunes a Viernes:  8:00 - 18:00 
                    <br />
                        Sábados : 8:00 - 16:00 
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>