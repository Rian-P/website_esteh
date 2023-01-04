<?php

namespace App\Http\Controllers\Landing;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }else{
            return view('landing.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('dashboard');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }


    public function index()
    {
        return view('landing.User.users',[
            'users' => User::all(),
        ]);
 
    }

    public function hapus($id_user)
    {
        $user = User::where('id_user', $id_user)
        ->delete();

        return redirect('users');
    }


    public function edit($id_user)
    {
        $data = User::find($id_user);
        return view('landing.User.edituser', compact('data'));
    }
    

    public function updateusers(Request $request, $id_user)
   
    {
        $data = User::find($id_user);
        $data->update($request->all());

        return redirect('users') -> with('success', "Data berhasil ditambahkan!");
    }
}
