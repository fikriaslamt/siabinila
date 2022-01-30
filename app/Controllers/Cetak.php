<?php

namespace App\Libraries;
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_surat_pengajuan_judul;


use FPDF;
use PDF;

class Cetak extends BaseController {
    
        public function __construct()
    {
        $this->M_surat_pengajuan_judul = new M_surat_pengajuan_judul();
 
    }

        function surat_pengajuan_judul($npm)
	{       
                $data = $this->M_surat_pengajuan_judul->find($npm);

        $pdf = new FPDF();
        //FORM A4
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $pdf->Cell(165,10,'Form A.4',0,0,'R');

        $pdf->Ln(15);
        $pdf->Cell(65);
        $pdf->SetFont('Times','UB',12);
        $pdf->Cell(60,10,'PROSES BIMBINGAN SKRIPSI',0,0,'C');

        $pdf->Ln(15);
        $pdf->Cell(15);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(35,10,'Nama Mahasiswa',0,0,'L');
        $pdf->Cell(5,10,": ".$data['nama'],0,0);

        $pdf->Ln(5);
        $pdf->Cell(15);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(35,10,'NPM',0,0,'L');
        $pdf->Cell(5,10,": ".$data['npm'],0,0);

        $pdf->Ln(5);
        $pdf->Cell(15);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(35,10,'Judul Skripsi',0,0,'L');
        $pdf->Cell(5,10,":",0,0);
        $pdf->Ln(8);
        $pdf->Cell(15);
        $pdf->Cell(5,10,"1. ".$data['judul1'],0,0);
        $pdf->Ln(5);
        $pdf->Cell(15);
        $pdf->Cell(5,10,"2. ".$data['judul2'],0,0);

        // $pdf->SetLineWidth(1.2);
        // $pdf->Line(10,10,10,200);
        // $pdf->Ln(15);

        $pdf->Ln(15);
        $pdf->Cell(5);
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(10,10,'No',1,0,'C');
        $pdf->Cell(40,10,'TANGGAL',1,0,'C');
        $pdf->Cell(100,10,'SARAN PEMBIMBING',1,0,'C');
        $pdf->Cell(30,10,'PARAF',1,0,'C');
        $pdf->Ln(10);
        $pdf->Cell(5);
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(10,6,'',1,0,'C');
        $pdf->Cell(40,6,'',1,0,'C');
        $pdf->Cell(100,6,'',1,0,'C');
        $pdf->Cell(30,6,'',1,0,'C');
        $pdf->Ln(6);
        $pdf->Cell(5);
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(10,100,'',1,0,'C');
        $pdf->Cell(40,100,'',1,0,'C');
        $pdf->Cell(100,100,'',1,0,'C');
        $pdf->Cell(30,100,'',1,0,'C');
        $pdf->Ln(105);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(135,10,'Bandar lampung,',0,0,'R');
        $pdf->Ln(20);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(152,10,'............................................',0,0,'R');
        $pdf->Ln(6);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(113,10,'NIP.',0,0,'R');

//FORM A5
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $pdf->Cell(165,10,'Form A.5',0,0,'R');

        $pdf->Ln(15);
        $pdf->Cell(65);
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(60,10,'KEIKUTSERTAAN SEBAGAI PETUGAS SEMINAR',0,0,'C');

        $pdf->Ln(20);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(20);
        $pdf->Cell(60,10,'Saya yang bertanda tangan di bawah ini:',0,0,'L');

        $pdf->Ln(10);
        $pdf->Cell(25);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(35,10,'Nama',0,0,'L');
        $pdf->Cell(5,10,": ".$data['nama'],0,0);

        $pdf->Ln(5);
        $pdf->Cell(25);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(35,10,'NPM',0,0,'L');
        $pdf->Cell(5,10,": ".$data['npm'],0,0);

        $pdf->Ln(5);
        $pdf->Cell(25);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(35,10,'Jurusan/PS',0,0,'L');
        $pdf->Cell(5,10,": ".$data['prodi'],0,0);

        $pdf->Ln(10);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(20);
        $pdf->Cell(60,10,'Menyatakan telah bertugas sebagai Moderator/Pembahas Mahasiswa I/Pembahas',0,0,'L');
        $pdf->Ln(5);
        $pdf->Cell(20);
        $pdf->Cell(60,10,'Mahasiswa II pada seminar:',0,0,'L');

        $pdf->Ln(10);
        $pdf->Cell(25);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(35,10,'Nama',0,0,'L');
        $pdf->Cell(5,10,": ".$data['nama'],0,0);

        $pdf->Ln(5);
        $pdf->Cell(25);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(35,10,'NPM',0,0,'L');
        $pdf->Cell(5,10,": ".$data['npm'],0,0);

        $pdf->Ln(5);
        $pdf->Cell(25);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(35,10,'Judul Skripsi',0,0,'L');
        $pdf->Cell(5,10,":",0,0);
        $pdf->Ln(8);
        $pdf->Cell(15);
        $pdf->Cell(5,10,"1. ".$data['judul1'],0,0);
        $pdf->Ln(5);
        $pdf->Cell(15);
        $pdf->Cell(5,10,"2. ".$data['judul2'],0,0);
 
        $pdf->Ln(20);
        $pdf->SetFont('Times','',12);
        $pdf->cell(110);
        $pdf->Cell(20,10,'Bandar lampung, '.$data['date'],0,0,'L');
        $pdf->Ln(5);
        $pdf->cell(110);
        $pdf->Cell(20,10,'Penyaji Seminar,',0,0,'L');
        $pdf->Ln(10);
        $pdf->cell(40);
        $pdf->Cell(20,10,'Moderator/Pembahas',0,0,'R');
        $pdf->Cell(95,10,'Mahasiswa',0,0,'R');
        $pdf->Ln(20);
        $pdf->SetFont('Times','',12);
        $pdf->cell(22);
        $pdf->Cell(105,10,$data['moderator'],0,0,'L');
        $pdf->Cell(20,10,$data['nama'],0,0,'L');
        $pdf->Ln(6);
        $pdf->SetFont('Times','',12);
        $pdf->cell(22);
        $pdf->Cell(105,10,'NPM. '.$data['npm_moderator'],0,0,'L');
        $pdf->Cell(20,10,'NPM. '.$data['npm'],0,0,'L');

        $pdf->Ln(15);
        $pdf->cell(70);
        $pdf->Cell(50,10,'Mengetahui,',0,0,'C');
        $pdf->Ln(5);
        $pdf->cell(70);
        $pdf->Cell(50,10,'Koordinator Pelaksana Seminar',0,0,'R');
        $pdf->SetFont('Times','',12);
        $pdf->Ln(20);
        $pdf->cell(66);
        $pdf->Cell(20,10,$data['koor_seminar'],0,0,'L');
        $pdf->Ln(6);
        $pdf->cell(66);
        $pdf->Cell(20,10,'NIP. '.$data['nip_koor_seminar'],0,0,'L');
    


        // $this->response->setHeader('Content-Type', 'application/pdf');
        // $pdf->Output();
        $pdf->Output('D',$data['npm'].'.pdf'); 

	}
}