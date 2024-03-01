<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{


    public function create()
    {
        return view('pages.create');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function index()
    {
        // $data = User::get();
        $data = User::latest()->get();

        return view('pages.index', compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('dashboard');
    }
}
