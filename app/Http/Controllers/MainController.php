<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class MainController extends Controller
{
    public function Index(Request $request)
    {

        return view('index', ['name' => 'James']);
    }
}
