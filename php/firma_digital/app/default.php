<?php
/**
 * @version     0.0.1
 * @package     FabrikaDev
 * @subpackage  Firma Digital
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */
	require('fpdf182/fpdf.php');

    // Recebemos e salvamos a imagem primeiro
	define('UPLOAD_DIR', 'images/');
	$img = $_POST['imgBase64'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	date_default_timezone_set('UTC');
	$name = date("YmdHis"); 
	// $file = UPLOAD_DIR . uniqid() . '.png';
	$file = UPLOAD_DIR . $name . '.png';
	$futurPdF = substr($file, -3, 3);
	$success = file_put_contents($file, $data);

    // Agora com o caminho $file podemos salvar na base de dados
	$pdf = new FPDF('L');
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,'Hola, Mundo!');
	$pdf->Ln();
	$pdf->Cell(60,10,'Hecho con FPDF');
	$pdf->Ln();
	$pdf->Image("images/".$name.".png",10, 60,60);
	$pdf->Ln();
	$urlPDF = "pdfs/".$name.".pdf";
	$pdf->Output('F', $urlPDF);

	echo $urlPDF;