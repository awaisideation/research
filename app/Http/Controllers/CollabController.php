<?php

namespace App\Http\Controllers;

use App\Collab;
use Illuminate\Http\Request;

class CollabController extends Controller
{
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);

        Collab::create($request->all());

        return redirect()->route('admin.index')
            ->with('success', 'Project created successfully.');
    }
}
