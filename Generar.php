<?php
require('fpdf186/fpdf.php');
include 'app/Conect.php';

class PDF extends FPDF {
    // Encabezado personalizado
    function Header() {
        // Fondo de color
        //$this->SetFillColor(0, 153, 153); // Color verde agua
        //$this->Rect(0, 0, 210, 50, 'F');

        // Agregar logo
        $this->Image('fondo.jpeg', 0, 0, 210);
        $this->Image('fondo2.png', 0, 120, 210);
        $this->Image('qr.png', 10, 140, 80);

        // Título principal
        $this->SetFont('Arial', 'B', 100);
        $this->SetTextColor(0, 153, 153); // Texto blanco
        $this->Cell(0, 10, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 30);
        $this->Cell(0, 10, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 30);
        $this->Cell(0, 10, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 30);
        $this->Cell(0, 10, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 30);
        $this->Cell(0, 10, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 30);
        $this->Cell(0, 10, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 30);
        $this->Cell(0, 10, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 30);
        $this->Cell(0, 10, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 30);
        $this->Cell(0, 10, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 30);
        $this->Cell(0, 10, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 30);
        $this->Cell(0, 10, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 30);
        $this->Cell(0, 10, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 30);
        $this->Cell(0, 10, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 30);
        $this->Cell(0, 5, '', 0, 1, 'C');
        $this->SetFont('Arial', '', 12);
        $this->Cell(135, 5, 'Presentar Identificacion Oficial ', 0, 1, 'R');
        $this->SetFont('Arial', '', 12);
        $this->Cell(124, 5, 'al Prestador de Servicios', 0, 1, 'R');
        $this->Ln(5);
    }

    
}

// Verificar si se envió el parámetro 'Id_Tit'
if (isset($_GET['Id_Tit'])) {
    $Id_Tit = $_GET['Id_Tit'];

    // Consulta a la base de datos
    $query = "SELECT * FROM titular WHERE Id_Tit = $Id_Tit";
    $result = mysqli_query($Conecta, $query);

    if ($consulta = mysqli_fetch_array($result)) {
        // Crear el PDF
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();

        // Datos del titular
        $pdf->SetFont('Arial', '', 10);
        $pdf->SetTextColor(0, 0, 0);

        $pdf->Cell(110, 5, 'Numero de Afiliacion:', 0, 0, 'R');
        $pdf->Cell(0, 5, $consulta['Id_Tit'], 0, 1, 'L');

        $pdf->Cell(87, 5, 'Titular:', 0, 0, 'R');
        $pdf->Cell(0, 5, $consulta['Nombre'], 0, 1, 'L');

        $pdf->Cell(91, 5, 'Vigencia:', 0, 0, 'R');
        $pdf->Cell(0, 5, $consulta['Vigencia'], 0, 1, 'L');

        // Beneficiarios
        $pdf->Ln(5);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(100, 5, 'Beneficiarios:', 0, 1, 'R');

        $pdf->SetFont('Arial', '', 10);
        for ($i = 1; $i <= 10; $i++) {
            switch ($i) {
                case 1: $benefField = "BenefUno"; break;
                case 2: $benefField = "BenefDos"; break;
                case 3: $benefField = "BenefTres"; break;
                case 4: $benefField = "BenefCuatro"; break;
                case 5: $benefField = "BenefCinco"; break;
                case 6: $benefField = "BenefSeis"; break;
                case 7: $benefField = "BenefSiete"; break;
                case 8: $benefField = "BenefOcho"; break;
                case 9: $benefField = "BenefNueve"; break;
                case 10: $benefField = "BenefDiez"; break;
            }

            if (!empty($consulta[$benefField])) {
                $pdf->Cell(80, 5, "$i.", 0, 0, 'R');
                $pdf->Cell(0, 5, $consulta[$benefField], 0, 1, 'L');
            }
        }

        // Información adicional decorativa
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'I', 10);
        $pdf->Cell(0, 10, 'CITAS Y COTIZACIONES: 56 17 52 47 10', 0, 1, 'C');
        $pdf->Cell(0, 10, 'Lunes a Viernes de 9:00 a.m. a 5:00 p.m. / Sabado de 10 a 2:00', 0, 1, 'C');

        // Descargar PDF
        $pdf->Output('D', 'afiliado_' . $Id_Tit . '.pdf');
    } else {
        echo "No se encontraron datos para el Id_Tit proporcionado.";
    }
} else {
    echo "No se proporciono el parametro 'Id_Tit'.";
}
?>