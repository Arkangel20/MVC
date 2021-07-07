<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/jquery-3.6.0.js"></script>
    
    <script src="js/bootstrap.js"></script>
    <script src="../ajax/pacienteajax.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="row justify-content-center mt-3 pt-5 bg-success">
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-between mb-3 mt-3 bg-dark">
            <h1 class="text-white">Paciente</h1>
        </div>

        <h1 class="display-4">Formulario</h1>
        <hr class="bg-success pb-1 mb-2">
        <p>Ingresa tus datos</p>

        <form id="myform" name="myform" method="POST">
            <div class="row form-group mt-3">
                <label for="nombre" class="col-form-label col-md-4">Id:</label>
                <div class="col-md-8">
                    <input type="hidden" name="id_pa" id="id_pa" class="form-control" readonly="true">
                </div>
            </div>
            <div class="row form-group mt-3">
                <label for="nombre" class="col-form-label col-md-4">Nombre:</label>
                <div class="col-md-8">
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
            </div>
            <div class="row form-group mt-3">
                <label for="nombre" class="col-form-label col-md-4">Fecha de Nacimiento:</label>
                <div class="col-md-8">
                    <input type="date" name="fec_nac" id="fec_nac" class="form-control" required>
                </div>
            </div>
            <div class="row form-group mt-3">
                <label for="nombre" class="col-form-label col-md-4">Correo:</label>
                <div class="col-md-8">
                    <input type="email" name="correo" id="correo" class="form-control" required>
                </div>
            </div>
            <div class="row form-group mt-3">
                <label for="nombre" class="col-form-label col-md-4">Telefono:</label>
                <div class="col-md-8">
                    <input type="text" name="tel" id="tel" class="form-control" required>
                </div>
            </div>
            <br>
            <br>

            <input type="hidden" name="m">
            <input type="submit" name="guardar" value="Guardar" id='btnguardar' class="btn btn-success">
            <input type="submit" name="modificar" value="Modificar" id="btnmodificar" class="btn btn-success">
            <input type="submit" name="eliminar" value="Eliminar" id="btneliminar" class="btn btn-success">
        </form>
   
        <br>
        <div class="tabla">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Opcion</th>
                    </tr>
                </thead>
                <tbody id="paci"></tbody>
            </table>

        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row justify-content-center mt-5 pt-5 bg-success"></div>
        </div>
    </footer>




</body>

</html>