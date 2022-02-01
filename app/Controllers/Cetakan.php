<?php

namespace App\Libraries;
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_surat_pengajuan_judul;
use CodeIgniter\Images\Image;
use \Mpdf\Mpdf;


class Cetakan extends BaseController {
    
        public function __construct()
    {
        $this->M_surat_pengajuan_judul = new M_surat_pengajuan_judul();
 
    }

        function surat_pengajuan_judul()
	{       
        // $data = $this->M_surat_pengajuan_judul->find($npm);
       

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('
                <center>
                <table>
                    <tr>
                        
                        
                        <td>
                            <center>
                                <font>UNIVERSITAS LAMPUBG</font> <br>
                                <font>UNIVERSITAS LAMPUBG</font> <br>
                                <font>UNIVERSITAS LAMPUBG</font> <br>
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
        ');
        return redirect()->to($mpdf->Output('file.pdf','I'));


	}
}