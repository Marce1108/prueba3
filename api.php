<?php
   include 'app/Conect.php';
   include 'app/Acciones.php';

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $afiliacion = $_POST['Afiliacion'];
       $titular = $_POST['Titular'];
       $vigencia = $_POST['Vigencia'];
       // Procesar y guardar en la base de datos.
       echo json_encode(['success' => true, 'message' => 'Afiliado agregado']);
   }
   ?>
