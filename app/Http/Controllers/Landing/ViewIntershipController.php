<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\intership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ViewIntershipController extends Controller
{
    public function index()
    {
        return view('landing.formintership');
    }

    public function show()
    {
        $internship = intership::all();
        return view('landing.internship', compact('internship'));
    }

    public function store(Request $request)
    {
        $internship = new intership;
        $internship->nama= $request->input('nama');
        $internship->jobs= $request->input('jobs');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->nama.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/intership/',$filename);
            $internship->image = $filename;
        }
        $internship->save();

        return redirect('viewintership') -> with('success', "Data berhasil ditambahkan!");
    }

    public function edit($id)
    {
        $internship = intership::find($id);
        return view('Landing.editintership', compact('internship'));
    }

    public function update(Request $request, $id)
    {
        $internship = intership::find($id);
        $internship->nama= $request->input('nama');
        $internship->jobs= $request->input('jobs');
        if($request->hasfile('image'))
        {
                $destination = 'storage/image/intership/'.$internship->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('image');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('storage/image/intership/',$filename);
                $internship->image = $filename;
        }
        $internship->nama = $request->nama;
        $internship->jobs = $request->jobs;
        $internship->update();

        return redirect('viewintership')->with('success', "Data berhasil ditambahkan!");
            
    }


    public function destroy($id)
    {
        $internship = intership::find($id);
        $path = 'storage/image/intership/'.$internship->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $internship->delete();

        return redirect('/viewportfolio') -> with('success', "Data berhasil ditambahkan!");
    }
    

}
