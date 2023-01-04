<?php

namespace App\Http\Controllers\Landing;

use App\Models\team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class UpdateteamController extends Controller
{
    public function index()
    {   
        // mengambil data dari table pegawai
    	$team = DB::table('team')->simplepaginate(5);

        return view('landing.updateteam',['team' => $team]);
    }

    public function tambah()
    {
 
	// memanggil view tambah
	return view('landing.tambahteam');
    }

    public function store(Request $request)

    {
        $validator = $request -> validate([
            'name' => 'required',
            'title' => 'required',
            'jabatan' =>'required',
            'pendidikan'=>'required',
            'keterangan1'=>'required',
            'keterangan2'=>'required',
            'keterangan3'=>'required',
            
            
            'image' => 'image|file|max:2048,jpeg,png,jpg',  
           
        ], 
        [
            "name.required" => "Please enter name",
            "title.required" => "Please enter title",
            "jabatan.required" => "Please enter title",
            "pendidikan.required" => "Please enter ",
        ]);


        $team = new Team;
        $team->name= $request->input('name');
        $team->title= $request->input('title');
        $team->jabatan= $request->input('jabatan');
        $team->keterangan1= $request->input('keterangan1');
        $team->keterangan2= $request->input('keterangan2');
        $team->keterangan3= $request->input('keterangan3');
        $team->pendidikan= $request->input('pendidikan');
        $team->facebook= $request->input('facebook');
        $team->twitter= $request->input('twitter');
        $team->linkedin= $request->input('linkedin');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->name.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/team/',$filename);
            $team->image = $filename;
        }
        if($request->hasFile('image1')){
            $file = $request->file('image1');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->name.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/portofolio/',$filename);
            $team->image1 = $filename;
        }
        if($request->hasFile('image2')){
            $file = $request->file('image2');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->name.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/portofolio/',$filename);
            $team->image2 = $filename;
        }
        if($request->hasFile('image3')){
            $file = $request->file('image3');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->name.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/portofolio/',$filename);
            $team->image3 = $filename;
        }
       
       
        $team->save();

        return redirect('/updateteam') -> with('success', "Data berhasil ditambahkan!");
    }

    // method untuk edit data team
    public function edit($id)
    {
         $team =  Team:: find($id);

        return view('landing.editteam', [
            'method'=> "PUT",
            'action'=> "/updateteam/edit/{id}'",
            'team'=> $team
        ]);
    }

    // update data team
    public function update(Request $request,$id)
    {
        $team = Team::find($id); 
            
        $validator = $request -> validate([
        'name' => 'required',
        'title' => 'required',
        'jabatan'=> 'required',
        'pendidikan' =>'required',
        'keterangan1'=>'required',
        'keterangan2'=>'required',
        'keterangan3'=>'required',
        'image' => 'image|file|max:2048,jpeg,png,jpg',
         
        ],
        [
            "name.required" => "Please enter name",
            "title.required" => "Please enter title",
            "jabatan.required" => "Please enter title",
            "pendidikan.required" => "Please enter ",
           
        ]);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'image|file|max:2048,jpeg,png,jpg',
              ]);
            Storage::delete($team->image);
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->name.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/team/',$filename);
            $team->image = $filename;
        }
        
        if($request->hasFile('image1')){
            $request->validate([
                'image' => 'image|file|max:2048,jpeg,png,jpg',
              ]);
            Storage::delete($team->image1);
            $file = $request->file('image1');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->name.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/portofolio/',$filename);
            $team->image1 = $filename;
        }
        if($request->hasFile('image2')){
            $request->validate([
                'image' => 'image|file|max:2048,jpeg,png,jpg',
              ]);
            Storage::delete($team->image2);
            $file = $request->file('image2');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->name.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/portofolio/',$filename);
            $team->image2 = $filename;
        }
        if($request->hasFile('image3')){
            $request->validate([
                'image' => 'image|file|max:2048,jpeg,png,jpg',
              ]);
            Storage::delete($team->image3);
            $file = $request->file('image3');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->name.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/portofolio/',$filename);
            $team->image3 = $filename;
        }


        $team->title = $request->title;
        $team->name = $request->name;
        $team->jabatan = $request->jabatan;
        $team->pendidikan = $request->pendidikan;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->keterangan1 = $request->keterangan1;
        $team->keterangan2 = $request->keterangan2;
        $team->keterangan3 = $request->keterangan3;
        $team->save();

        return redirect('updateteam')->with('toast_success','Data Telah Diupdate');
    }


    // method untuk hapus data pegawai
    public function hapus($id)
    {
        $team = Team::find($id);
        $path = 'storage/image/team/'.$team->image;
        $path = 'storage/image/portofolio/'.$team->image1;
        $path = 'storage/image/portofolio/'.$team->image2;
        $path = 'storage/image/portofolio/'.$team->image3;
        if(File::exists($path)){
            File::delete($path);
            
        }
        $team->delete();
        
        return back() -> with('info', "Data berhasil dihapus!");
    }
}
