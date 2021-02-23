<?php

namespace App\Http\Controllers;

use App\Collab;
use App\Event;
use App\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollabController extends Controller
{
    public function index()
    {
//        $collabs = Collab::latest()->paginate(5);
//        $scholarships= Scholarship::latest()->paginate(5);
//        $events= Event::latest()->paginate(5);
//        return view('admin.index', compact('collabs','scholarships','events'))
//            ->with('i', (request()->input('page', 1) - 1) * 5);
        $collabs = Collab::all();
        $scholarships = Scholarship::all();
        $events = Event::all();
        return view('admin.index', compact('collabs', 'scholarships', 'events'));
    }

    public function collabdetails()
    {
        $collabs = Collab::all();
//        dd($collabs);
        return view('collaborators.view', compact('collabs'));
    }

    public function create()
    {
//        return view('admin.create');
        return view('collaborators.create');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $input=$request->all();
        $images=array();

        if($files=$request->file('images')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move(base_path() . '/public/upload/',$name);
                $images[]=$name;
            }
//            dd($images);
        }

       else if (isset($request->image)) {

            $imageName = time() . '.' . $request['image']->extension();
            $request['image']->move(
                base_path() . '/public/upload/', $imageName
            );
            dd($imageName);
            /*Insert your data*/

            Collab::insert([
                'images' => implode("|", $images),
                'description' => $input['description'],
                'name' => $input['name'],
                'image' => '/dummy.png',
                //you can put other insertion here
            ]);
        }
        else{
        }
            Collab::create([
                'images' => implode("|", $images),
                'description' => $input['description'],
                'name' => $input['name'],
                'image' => '/dummy.png',
            ]);
//        }


//        $request->validate([
//            'name' => 'required|string|max:255',
//            'description' => 'required|string|max:255',
//            'image' => 'nullable',
//        ]);
//        if (isset($request->image)) {
//            $imageName = time() . '.' . $request['image']->extension();
//            $request['image']->move(
//                base_path() . '/public/upload/', $imageName
//            );
//            Collab::create([
//                'name' => $request->name,
//                'description' => $request->description,
//                'image' => $imageName,
//            ]);
//            return redirect('/admins');
//
//        } else {
//
//            Collab::create([
//                'name' => $request->name,
//                'description' => $request->description,
//                'image' => '/dummy.png',
//            ]);
//        }
        return redirect('/admins');
    }

    public function edit($id, Request $request)
    {

        $collab = Collab::find($id);
        return view('admin.edit', compact('id', 'collab'));
    }

    public function update(Request $request)
    {
//        dd($request->all());
//       $data= DB::table('collab')->get()->where('id',$request->id);
//       dd($data);
        $data = Collab::findOrFail($request->id);
        $data->name = $request->name;
        $data->description = $request->description;
//        $data->image = $request->image;

//        if (isset($request->image)) {
//            $data->image = $request->image;
//        }
//        else {
//            $data->image = $request->image;
//        }
        $data->save();
        return  redirect('admins/');
    }

    public function destroy($id)
    {
        $collab = Collab::find($id);
        $collab->delete();
        return redirect('admins');
    }


}
