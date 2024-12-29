<?php
include 'app/Conect.php';

if (isset($_GET['Id_Tit'])) {
    $Id_Tit = $_GET['Id_Tit'];
    $resultados = mysqli_query($Conecta, "SELECT * FROM titular WHERE Id_Tit = $Id_Tit");
    $datos = mysqli_fetch_assoc($resultados);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Nombre = $_POST['Nombre'];
    $Vigencia = $_POST['Vigencia'];
    $BenefUno = $_POST['BenefUno'];
    $BenefDos = $_POST['BenefDos'];
    $BenefTres = $_POST['BenefTres'];
    $BenefCuatro = $_POST['BenefCuatro'];
    $BenefCinco = $_POST['BenefCinco'];
    $BenefSeis = $_POST['BenefSeis'];
    $BenefSiete = $_POST['BenefSiete'];
    $BenefOcho = $_POST['BenefOcho'];
    $BenefNueve = $_POST['BenefNueve'];
    $BenefDiez = $_POST['BenefDiez'];

    
    $query = "UPDATE titular SET Nombre='$Nombre', Vigencia='$Vigencia', BenefUno='$BenefUno', BenefDos='$BenefDos', BenefTres='$BenefTres',
    BenefCuatro='$BenefCuatro', BenefCinco='$BenefCinco', BenefSeis='$BenefSeis', BenefSiete='$BenefSiete', BenefOcho='$BenefOcho',
    BenefNueve='$BenefNueve', BenefDiez='$BenefDiez' WHERE Id_Tit=$Id_Tit";
    mysqli_query($Conecta, $query);
    header("Location: Buscar.php"); // Redirige después de editar
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Afiliados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                url('fondo.jpeg');
    background-size: cover;
    
    background-position: center center;
    height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
    text-align: center;
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
    <h1>Editar Datos</h1>
    <form method="POST">
        <label for="Nombre">Titular:</label>
        <input type="text" id="Nombre" name="Nombre" value="<?= $datos['Nombre'] ?>" required><br>
        
        <label for="Vigencia">Vigencia:</label>
        <input type="date" id="Vigencia" name="Vigencia" value="<?= $datos['Vigencia'] ?>" required><br>
        
        <label for="BenefUno">Beneficiario 1:</label>
        <input type="text" id="BenefUno" name="BenefUno" value="<?= $datos['BenefUno'] ?>"><br>

        <label for="BenefUno">Beneficiario 2:</label>
        <input type="text" id="BenefDos" name="BenefDos" value="<?= $datos['BenefDos'] ?>"><br>

        <label for="BenefUno">Beneficiario 3:</label>
        <input type="text" id="BenefTres" name="BenefTres" value="<?= $datos['BenefTres'] ?>"><br>

        <label for="BenefUno">Beneficiario 4:</label>
        <input type="text" id="BenefCuatro" name="BenefCuatro" value="<?= $datos['BenefCuatro'] ?>"><br>

        <label for="BenefUno">Beneficiario 5:</label>
        <input type="text" id="BenefCinco" name="BenefCinco" value="<?= $datos['BenefCinco'] ?>"><br>

        <label for="BenefUno">Beneficiario 6:</label>
        <input type="text" id="BenefSeis" name="BenefSeis" value="<?= $datos['BenefSeis'] ?>"><br>

        <label for="BenefUno">Beneficiario 7:</label>
        <input type="text" id="BenefSiete" name="BenefSiete" value="<?= $datos['BenefSiete'] ?>"><br>

        <label for="BenefUno">Beneficiario 8:</label>
        <input type="text" id="BenefOcho" name="BenefOcho" value="<?= $datos['BenefOcho'] ?>"><br>

        <label for="BenefUno">Beneficiario 9:</label>
        <input type="text" id="BenefNueve" name="BenefNueve" value="<?= $datos['BenefNueve'] ?>"><br>

        <label for="BenefUno">Beneficiario 10:</label>
        <input type="text" id="BenefDiez" name="BenefDiez" value="<?= $datos['BenefDiez'] ?>"><br>
        
        <button type="submit">Guardar Cambios</button>
    </form>
 </div>
    <script>
        // Función para regresar a la página principal
        function regresarInicio() {
            window.location.href = 'Bienvenida.php';
        }
    </script>
    </div>
</body>
</html>