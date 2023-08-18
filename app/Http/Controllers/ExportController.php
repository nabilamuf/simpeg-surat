<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Dompdf\Dompdf;
use Dompdf\Options;

use Illuminate\Http\Request;

class ExportController extends Controller
{
    //
    public function print()
    {
        // return 'Berhasil';
        // $data = Pegawai::all();
        // $pdf = PDF::loadView('pegawai.cetak-pdf', compact('data'));
        // $pdf->setPaper('A4', 'potrait');
        // return $pdf->stream('cetak.pdf');

        $data = [
            'pegawai' => Pegawai::all()
        ];
        // return view('print', $data);
        $html =  view('print', $data);

        // instantiate and use the dompdf class
        $options = new Options();
        $options->set('defaultFont', 'arial');
        $dompdf = new Dompdf($options);


        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}
