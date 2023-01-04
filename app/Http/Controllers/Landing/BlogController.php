<?php

namespace App\Http\Controllers\Landing;

use App\Models\blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blog() {
        $blog =DB::table('blog')->get();
        	// mengirim data pegawai ke view index
    	return view('landing.blog',['blog' => $blog]);
    }
    
}
