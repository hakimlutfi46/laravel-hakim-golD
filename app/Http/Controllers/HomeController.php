<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{


    public function create()
    {
        return view('create');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function index()
    {
        $data = User::get();

        return view('index', compact('data'));
    }
}
