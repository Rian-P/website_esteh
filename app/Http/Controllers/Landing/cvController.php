<?php

namespace App\Http\Controllers\Landing;
use App\Models\team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cvController extends Controller
{
    public function cv() {
        $team =DB::table('team')->get();
        	// mengirim data pegawai ke view index
    	return view('landing.cv',['team' => $team]);
    }

    public function edit($id)
    {
         $team =  Team:: find($id);

        return view('landing.cv', [
            'method'=> "PUT",
            'href'=> "/cv/edit/{id}'",
            'team'=> $team
        ]);
    }
}
