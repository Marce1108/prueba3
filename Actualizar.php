<?php
// Conexión a la base de datos
include 'app/Conect.php';

// Obtener los datos del formulario
$Id_Tit = $_POST['Id_Tit'];
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

// Consulta para actualizar los datos
$query = "UPDATE Clientes.titular SET Nombre = ?, Vigencia = ?, BenefUno = ?, BenefDos = ?, BenefTres = ?, BenefCuatro = ?, BenefCinco = ?, BenefSeis = ?, BenefSiete = ?, BenefOcho = ?, BenefNueve = ?, BenefDiez = ? WHERE Id_Tit = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ssi", $Nombre, $Vigencia, $BenefUno, $BenefDos, $BenefTres, $BenefCuatro, $BenefCinco, $BenefSeis, $BenefSiete, $BenefOcho, $BenefNueve, $BenefDiez, $Id_Tit);

if ($stmt->execute()) {
    echo "Datos actualizados correctamente.";
    echo "<a href='lista.php'>Volver a la lista</a>";
} else {
    echo "Error al actualizar los datos: " . $stmt->error;
}
?>
