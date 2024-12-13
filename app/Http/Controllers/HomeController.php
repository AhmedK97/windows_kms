<?php

namespace App\Http\Controllers;

use App\Models\File;

class HomeController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('home', compact('files'));
    }

    // file.store
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'path' => 'required',
            'version' => 'required',
            'size' => 'required',
        ]);

        File::create(request()->all());

        return redirect()->route('home');
    }
}
