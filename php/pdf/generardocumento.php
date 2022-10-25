<?php
require_once '../plugins/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->title = 'Contrato de Trabajo';
$mpdf->author = 'Wilkens Mompoint';
$mpdf->creator = 'Wilkens Mompoint';
$mpdf->subject = 'Contrato de Trabajo';
$mpdf->keywords = 'Contrato, Trabajo, Empleo';
$mpdf->SetDisplayMode('fullpage');
$mpdf->SetHTMLHeader('<div style="text-align: right; font-weight: bold;">Contrato de Trabajo</div>');
$mpdf->SetHTMLFooter('<div style="text-align: right; font-weight: bold;">Consultadora DG</div>');
$mpdf->WriteHTML('<h1>Contrato de Trabajo</h1>');
$mpdf->WriteHTML('<p>Contrato de Trabajo</p>');

$mpdf->AddPage();
$mpdf->title = 'Contrato de Trabajo';
$mpdf->author = 'Wilkens Mompoint';
$mpdf->creator = 'Wilkens Mompoint';
$mpdf->subject = 'Contrato de Trabajo';
$mpdf->keywords = 'Contrato, Trabajo, Empleo';
$mpdf->SetDisplayMode('fullpage');
$mpdf->SetHTMLHeader('<div style="text-align: right; font-weight: bold;">Contrato de Trabajo</div>');
$mpdf->SetHTMLFooter('<div style="text-align: right; font-weight: bold;">Consultora DG</div>');
$mpdf->WriteHTML('<h1>Contrato de Trabajo</h1>');
$mpdf->WriteHTML('<p>Contrato de Trabajo</p>');
$mpdf->Output('hello_world.pdf' , 'I' );
