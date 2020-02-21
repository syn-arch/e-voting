<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

   public function index()
   {

      if (!Session::get('login')) {
        return redirect('auth/login')->with(['pesan' => 'Kamus harus login terlebih dahulu']);
      }

   		$data['judul'] = "Dashboard";
   		$data['jml_jurusan'] = DB::table('jurusan')->get()->count();
   		$data['jml_kelas'] = DB::table('kelas')->get()->count();
   		$data['jml_kandidat'] = DB::table('kandidat')->get()->count();
   		$data['jml_pemilih'] = DB::table('pemilih')->get()->count();

   		return view('dashboard', $data);

   }
}
