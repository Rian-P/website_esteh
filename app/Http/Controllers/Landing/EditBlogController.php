<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditBlogController extends Controller
{
    public function editblog()
    {
        return view('landing.editblog');
    }

    // public function store(Request $request)
    // {
    //     // insert data ke table blog
    //     DB::table('blog')->insert([
    //         'image' => $request->image,
    //         'jobs' => $request->jobs,
            
    //         'title' => $request->title,
    //         'description' => $request->description,
    //         'reading' => $request->reading,
    //         'date' =>  Carbon::now()
    //     ]);
    // }

    // public function edit($id)
    // {
    //     // mengambil data pegawai berdasarkan id yang dipilih
    //     $blog = DB::table('blog')->where('id',$id)->get();
    //     // passing data pegawai yang didapat ke view edit.blade.php
    //     return view('landing.editblog',['blog' => $blog]);
    // }

    // public function update(Request $request)
    // {
    //     // update data pegawai
    //     DB::table('blog')->where('id',$request->id)->update([
    //         'image' => $request->image,
    //         'jobs' => $request->jobs,
    //         'title' => $request->title,
    //         'description' => $request->description,
    //         'reading' => $request->reading,
    //         'date' =>  Carbon::now()
    //     ]);
    //     // alihkan halaman ke halaman pegawai
    //     return redirect('/updateblog');
    // }

    // public function hapus($id)
    // {
    //     // menghapus data pegawai berdasarkan id yang dipilih
    //     DB::table('blog')->where('id',$id)->delete();
            
    //     // alihkan halaman ke halaman pegawai
    //     return redirect('/updateblog');
    // }

}