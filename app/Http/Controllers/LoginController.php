<?php

namespace App\Http\Controllers;

use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->level == 'admin') {
                return redirect('/beranda');
            }elseif (Auth::user()->level == 'sistem') {
                return redirect('/beranda');
            }
        }
        return view('user.Login');
    }

    public function postlogin (Request $request){
        // dd($request->all());
        if (Auth::attempt($request->only('username','password'))){
            return redirect('beranda');
        }
        else{
            Alert::error('Error', 'Username Atau Password Salah');
            return redirect('login');
        }
    }

    public function logout (Request $request){
        $request->session()->invalidate();
        return redirect('login');
    }
}
