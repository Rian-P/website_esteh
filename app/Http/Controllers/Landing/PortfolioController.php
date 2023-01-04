<?php

namespace App\Http\Controllers\Landing;

use App\Models\portfolio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PortfolioController extends Controller
{
    public function portfolio() {
        $portfolio = Portfolio::all();
        return view('landing.portofolio', compact('portfolio'));
    }
}
