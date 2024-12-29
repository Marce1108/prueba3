<?php
include 'app/Conect.php';
include 'app/Acciones.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                url('fondo.jpeg');
            background-size: cover;
            background-repeat: repeat;
            background-position: center center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
            text-align: left;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #333;
        }
        form {
            margin: 20px auto;
            max-width: 400px;
        }
        input[type="text"],
        input[type="date"] {
            padding: 10px;
            width: 80%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button, input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #28c2d9;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
        button, input[type="submit"]:hover {
            background-color: #197381;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        #form-editar,
        #form-agregar {
            margin-top: 20px;
            text-align: left;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 align="center">Agregar Nuevo Afiliado</h3>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h8>Número de afiliación</h8>
                        <input type="text" name="Afiliacion" id="" placeholder="Número de Afiliación" class="form-control" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h8>Nombre Completo</h8>
                        <input type="text" name="Titular" id="" placeholder="Nombre del Titular" class="form-control" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <h8>Vigencia</h8>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="date" name="Vigencia" id="" placeholder="Vigencia" class="form-control" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <h8>Agrega hasta 10 beneficiarios</h8>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="text" name="Ben1" id="" placeholder="Beneficiario 1" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="text" name="Ben2" id="" placeholder="Beneficiario 2" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="text" name="Ben3" id="" placeholder="Beneficiario 3" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="text" name="Ben4" id="" placeholder="Beneficiario 4" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="text" name="Ben5" id="" placeholder="Beneficiario 5" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="text" name="Ben6" id="" placeholder="Beneficiario 6" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="text" name="Ben7" id="" placeholder="Beneficiario 7" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="text" name="Ben8" id="" placeholder="Beneficiario 8" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="text" name="Ben9" id="" placeholder="Beneficiario 9" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="text" name="Ben10" id="" placeholder="Beneficiario 10" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <input type="submit" value="Agregar" name="BtnAgregar" class="btn btn-md btn-success">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <button type="button" class="btn-secondary" onclick="regresarInicio()">Volver al inicio</button>
                </div>
            </div>

            </form>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function regresarInicio() {
            window.location.href = 'Bienvenida.php';
        }
    </script>
</body>
</html>