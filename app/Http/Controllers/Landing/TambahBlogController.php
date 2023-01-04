<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\blog;




class TambahBlogController extends Controller
{
    public $image;
    public $dimensions;

    public function tambahblog()
    {
        return view('landing.tambahblog');
    }
    public function __construct()
  {
	  //DEFINISIKAN PATH
	  $this->image = 'images/blog/';
	  //DEFINISIKAN DIMENSI
	  $this->dimensions = [ '500'];
  }
    public function store(Request $request)
    {
        
        $blog = new blog;

        $blog->jobs = $request->input('jobs');
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->reading = $request->input('reading');
        $blog['date'] = Carbon::now($request->date);

        if($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $thumb = Image::make($file->getRealPath())->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
           

            $destinationPath = 'images/blog/';
            $file->storeAs($destinationPath, $extension);
            $thumb->save($destinationPath.'/thumb_'.$extension);
            $blog['image'] = $extension;
            $blog['thumbnail'] = 'thumb_' . $extension;


            // $file->storeAs('images/blog/', $extension);
            // $thumb->save('images/blog/'.'/thumb_',$extension);
            // $blog['image'] = $extension;
            // $blog['thumbnail'] = '/images/blog' . '/thumb_' . $extension;
           
            
        }
        
        $blog->save();
        return redirect('/tambahblog') -> with('success', "Data berhasil ditambahkan!");
        
        
        
        // alihkan halaman ke halaman pegawai
        // return redirect('/updateblog');
     
    }
    
    public function edit($id)
{
// 	// mengambil data pegawai berdasarkan id yang dipilih
// 	$blog = DB::table('blog')->where('id',$id)->get();
// 	// passing data pegawai yang didapat ke view edit.blade.php
// 	return view('landing.editblog',['blog' => $blog]);
$blog =  Blog:: find($id);

return view('landing.editblog', [
    'method'=> "PUT",
    'action'=> "/viewblog/edit/{id}'",
    'blog'=> $blog
]);
}
// }
// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	// DB::table('blog')->where('id',$request->id)->update([
	// 	'image' => $request->image,
	// 	'jobs' => $request->jobs,
	// 	'title' => $request->title,
    //     'description' => $request->description,
    //     'reading' => $request->reading,
    //     'date' =>  Carbon::now()
	// ]);
    $blog = new blog;
    $blog->title = $request->title;
    $blog->jobs = $request->jobs;
    // $blog['slug'] = Str::slug($request->title);
    $blog->description= $request->description;
    $blog->reading = $request->reading;
    
  
    $blog['date'] = Carbon::now($request->date);

    if($file = $request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalName();
        $thumb = Image::make($file->getRealPath())->resize(500, 500, function ($constraint) {
            $constraint->aspectRatio(); //maintain image ratio
        });
       

        $destinationPath = 'images/blog/';
        $file->storeAs($destinationPath, $extension);
        $thumb->save($destinationPath.'/thumb_'.$extension);
        $blog['image'] = $extension;
        $blog['thumbnail'] = 'thumb_' . $extension;
    }
    $blog->save();
        
        
        
	// alihkan halaman ke halaman pegawai
	return redirect('/viewblog')->with('toast_success','Data Telah Diupdate');;
}
// method untuk hapus data pegawai
public function hapus($id)
{
	// // menghapus data pegawai berdasarkan id yang dipilih
	// DB::table('blog')->where('id',$id)->delete();
    // $image = 'public/images/blog';
    //     if(File::exists($image)){
    //         File::delete($image);
    //     }
	// // alihkan halaman ke halaman pegawai
    // return redirect('/viewblog')-> with('toast_info', "Data berhasil dihapus!");;

    $blog = Blog::find($id);
        $image = 'storage/image/blog/'.$blog->image;
        if(File::exists($image)){
            File::delete($image);
        }
        $blog->delete();
        
        return back() -> with('toast_info', "Data berhasil dihapus!");
}
public function show($id){

    return $id;
}
}
