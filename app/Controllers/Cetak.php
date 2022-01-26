<?php

namespace App\Libraries;
namespace App\Controllers;
use CodeIgniter\Controller;


use FPDF;



class Cetak extends Controller {
    
	function index()
	{
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,'Hello World!');
        $this->response->setHeader('Content-Type', 'application/pdf');
        $pdf->Output();

	}
}