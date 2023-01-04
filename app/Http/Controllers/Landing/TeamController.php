<?php

namespace App\Http\Controllers\Landing;
use App\Models\team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function team() {
        $team =DB::table('team')->get();
        	// mengirim data pegawai ke view index
    	return view('landing.team',['team' => $team]);
    }
}
