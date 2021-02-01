<?php

namespace App\Http\Controllers;

use App\Collab;
use Illuminate\Http\Request;

class CollabController extends Controller
{
    public function index()
    {
        $collabs = Collab::latest()->paginate(5);

        return view('admin.index', compact('collabs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
//        return view('admin.index');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {

        Collab::create($request->all());
        return redirect('admins/');
    }
    public function edit($id)
    {
//        dd($id);
//        return view('admin.edit');
        $collab= Collab::find($id);
//        return view('admin.edit', compact('collab'));
//        return  $collab;


        return view('admin.edit', compact('id','collab'));
    }
//    public function update(Request $request, Collab $collab){
//        dd($collab);
//        $collab->update($request->all());
//
//    }
    public function update(Request $request, Collab $collab)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
//
//dd($request->all());
//        $collab->find($id)
    $collab->update($request->all());

return redirect('admins/');



    }

    public function destroy($id)
    {
        $collab = Collab::find($id);
        $collab->delete();
        return redirect('admins');
    }
}
