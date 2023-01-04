<?php

namespace App\Http\Controllers\Landing;

use App\Models\blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Carbon\Carbon;


class ViewBlogController extends Controller
{
    public function viewblog() {
        $blog = DB::table('blog')->get();
 
    	// mengirim data pegawai ke view index
    	return view('landing.viewblog',['blog' => $blog]);
    }

}