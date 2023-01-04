<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ViewPortfolioController extends Controller
{
    public function index()
    {
        return view('landing.updateportfolio');
    }

    public function store(Request $request)
    {
        $partner = new Portfolio;
        $partner->keterangan= $request->input('keterangan');
        if($request->hasFile('Portfolio')){
            $file = $request->file('Portfolio');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->nama.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/Portfolio/',$filename);
            $partner->Portfolio = $filename;
        }
        $partner->save();

        return redirect('viewportfolio') -> with('success', "Data berhasil ditambahkan!");
    }

    public function show()
    {
        $portfolio = Portfolio::all();
        return view('landing.updateportfolio', compact('portfolio'));
    }

    public function edit($id)
    {
        $data = Portfolio::find($id);
        return view('Landing.editportfolio', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Portfolio::find($id);
        $data->keterangan = $request->input('keterangan');
        if($request->hasfile('portfolio'))
        {
                $destination = 'storage/image/portfolio/'.$data->portfolio;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('portfolio');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('storage/image/portfolio/',$filename);
                $data->portfolio = $filename;
        }
        $data->keterangan = $request->keterangan;
        $data->update();

        return redirect('viewportfolio')->with('success', "Data berhasil ditambahkan!");
            
    }


    public function destroy($id)
    {
        $patner = Portfolio::find($id);
        $path = 'storage/image/Portfolio/'.$patner->Portfolio;
        if(File::exists($path)){
            File::delete($path);
        }
        $patner->delete();
        
        return redirect('/viewportfolio') -> with('success', "Data berhasil ditambahkan!");
    }

    public function fromportfolio()
    {
        return view('Landing.formPortfolio');
    }
}
