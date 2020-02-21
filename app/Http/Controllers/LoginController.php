<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\UserModel;

class LoginController extends Controller
{
    public function index()
    {
    	if (!Session::get('login')) {
    		return redirect('auth/login')->with(['pesan' => 'Kamus harus login terlebih dahulu']);
    	}else{
    		return redirect('/dashboard'); 
    	}
    }

    public function login()
    {
    	return view('login');
    }

    public function proses_login(Request $request)
    {
    	$email = $request->email;
    	$password = $request->password;

    	$data = UserModel::where('email', $email)->first();
    	if (!$data) {
    		return redirect('auth/login')->with(['error' => 'Email anda tidak ditemukan!']);
    	}else{
    		if (Hash::check($password, $data->password)) {
    			Session::put('login', true);
    			Session::put('email', $data->email);
                Session::put('id_admin', $data->id_admin);
                Session::put('gambar', $data->gambar);
                Session::put('nm_admin', $data->nm_admin);
    			return redirect('/dashboard');
    		}else{
				return redirect('auth/login')->with(['error' => 'Password yang anda masukan salah!']);
    		}
    	}
    }

    public function logout()
    {
    	Session::forget('login');
        Session::forget('email');
        Session::forget('id_admin');
        Session::forget('gambar');
        Session::forget('nm_admin');
        
        return redirect('/auth/login')->with(['pesan' => 'Berhasil logout!']);
    }
}
