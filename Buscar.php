<?php
include 'app/Conect.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Afiliados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                url('fondo.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
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
        input[type="text"] {
            padding: 10px;
            width: 80%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button,input[type="submit"] {
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
        #resultados {
            margin-top: 20px;
            text-align: left;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 align="center">Buscar Afiliados</h1>
        <form method="POST" action="buscar.php">
            <div class="form-group">
                <label for="Id_Tit">Número de Afiliación:</label>
                <input type="text" id="Id_Tit" name="Id_Tit" class="form-control" required>
            </div>
            <input type="submit" value="Buscar" class="btn btn-success" name="btn1">    
            <button type="button" value="Buscar" name="BtnBuscar" class="btn-secondary" onclick="regresarInicio()">Volver al inicio</button>
        </form>

        <?php
        if(isset($_POST['btn1'])){
            $Id_Tit = $_POST['Id_Tit'];
            $resultados = mysqli_query($Conecta, "SELECT*FROM titular WHERE Id_Tit = $Id_Tit");

            $datos_encontrados = false;

            while($consulta = mysqli_fetch_array($resultados)){
                echo"
                <table width=\"100%\"  align=\"center\">
                <tr>
                <td width=\"50%\" align=\"right\"><b>Número de Afiliación: </b></td>
                <td>".$consulta['Id_Tit']."</td>
                </tr>
                <tr>
                <td align=\"right\"><b>Titular: </b></td>
                <td>".$consulta['Nombre']."</td>
                </tr>
                <tr>
                <td align=\"right\"><b>Vigencia: </b></td>
                <td>".$consulta['Vigencia']."</td>
                </tr>
                <tr>
                <td align=\"right\"><b>Beneficiarios: </b></td>
                </tr>
                <tr>
                <td align=\"right\">1. </td>
                <td>".$consulta['BenefUno']."</td>
                </tr>
                <tr>
                <td align=\"right\">2. </td>
                <td>".$consulta['BenefDos']."</td>
                </tr>
                <tr>
                <td align=\"right\">3. </td>
                <td>".$consulta['BenefTres']."</td>
                </tr>
                <tr>
                <td align=\"right\">4. </td>
                <td>".$consulta['BenefCuatro']."</td>
                </tr>
                <tr>
                <td align=\"right\">5. </td>
                <td>".$consulta['BenefCinco']."</td>
                </tr>
                <tr>
                <td align=\"right\">6. </td>
                <td>".$consulta['BenefSeis']."</td>
                </tr>
                <tr>
                <td align=\"right\">7. </td>
                <td>".$consulta['BenefSiete']."</td>
                </tr>
                <tr>
                <td align=\"right\">8. </td>
                <td>".$consulta['BenefOcho']."</td>
                </tr>
                <tr>
                <td align=\"right\">9. </td>
                <td>".$consulta['BenefNueve']."</td>
                </tr>
                <tr>
                <td align=\"right\">10. </td>
                <td>".$consulta['BenefDiez']."</td>
                </tr>
                </table>

                ";
                
            }
            
                echo "
                    <button type=\"button\" onclick=\"Editar()\">Editar</button>
                    <button type=\"button\" onclick=\"Generar()\">Generar PDF</button>
                ";
            
        }
        ?>
        
    </div>

    <script>
        // Función para regresar a la página principal
        function regresarInicio() {
            window.location.href = 'Bienvenida.php'; // Cambia la URL para redirigir a la página principal
        }
        function Editar() {
        const idTit = <?= $Id_Tit ?>;
        window.location.href = `Editar.php?Id_Tit=${idTit}`;
        }
        function Generar() {
            const idTit = <?= $Id_Tit ?>;
            window.location.href=`Generar.php?Id_Tit=${idTit}`;
        }

    </script>
</body>
</html>
