<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service() {
        return view('landing.service');
    }
}
