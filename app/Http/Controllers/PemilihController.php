<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PemilihExport;
use App\Imports\PemilihImport;
use DataTables;
use PDF;

use App\Pemilih;
use App\Jurusan;
use App\Kelas;

class PemilihController extends Controller
{
    public function __construct()
    {
        if (!Session::get('login')) {
            return redirect('auth/login')->with(['pesan' => 'Kamus harus login terlebih dahulu']);
        }
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate_barcode()
    {
        if (!Session::get('login')) {
            return redirect('auth/login')->with(['pesan' => 'Kamus harus login terlebih dahulu']);
          }
      
        $data['judul'] = "Generate Barcode";

        return view('pemilih/index', $data);
    }

    public function generate(Request $request)
    {
       $jumlah_data = $request->data;

       for ($i=0; $i < $jumlah_data ; $i++) { 

           $data_pemilih = new Pemilih;
           $data_pemilih->barcode = $this->randomNumber(5);
           $data_pemilih->status = '0';
           $data_pemilih->sudah_print = '0';
           $data_pemilih->save();
       }

      $data['pemilih'] = Pemilih::where('sudah_print', 0)->get();
      return redirect('/barcode');
    }

    function randomNumber($length) {
        $result = '';

        for($i = 0; $i < $length; $i++) {
            $result .= mt_rand(0, 9);
        }

        return $result;
    }

    public function barcode()
    {
       $data['pemilih'] = Pemilih::where('sudah_print', 0)->get();

       Pemilih::query()->update(['sudah_print' => 1]);

       return view('barcode', $data);
    }

}