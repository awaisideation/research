<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use App\Designation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Log;

class AuthController extends Controller
{
    public function register()
    {
//        $designations = User::with('designation')->pluck('id', 'title');
        $designations = DB::table('designations')->get();
        $programs = DB::table('programs')->get();
        $universities = DB::table('universities')->get();
        if (auth()->user()) {
            return view('auth.login');
//            return redirect(route('home'));
        } else {
//            return view('auth.login');
            return view('auth.register', compact('designations', 'programs', 'universities'));
        }
    }

    public function storeUser(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
//            'image' => 'sometime|required',
            'image' => 'nullable',
        ]);
        if (isset($request->image)) {
//            return redirect()->back()->with('alert', 'image!');
            $imageName = time() . '.' . $request['image']->extension();;
            $request['image']->move(
                base_path() . '/public/upload/', $imageName
            );

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'image' => $imageName,
                'department' => $request->department,
                'designation_id' => $request->designation,
                'program_id' => $request->programs,
                'university_id' => $request->universities,
                'pay_option' => $request->pay_option,
            ]);

            return redirect('home');

        } else {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'image' => 'No Image',
                'department' => $request->department,
                'designation_id' => $request->designation,
                'program_id' => $request->programs,
                'university_id' => $request->universities,
                'pay_option' => $request->pay_option,
            ]);
        }

//        exit();

//

//
//        $imageName = time() . '.' . $request['image']->extension();;
//        $request['image']->move(
//            base_path() . '/public/upload/', $imageName
//        );
//
//        User::create([
//            'name' => $request->name,
//            'email' => $request->email,
//            'password' => Hash::make($request->password),
//            'image' => $imageName,
//            'department' => $request->department,
//            'designation_id' => $request->designation,
//            'program_id' => $request->programs,
//            'university_id' => $request->universities,
//            'pay_option' => $request->pay_option,
//        ]);

        return redirect('home');
    }

    public function login()
    {
        if (auth()->user()) {
            return redirect(route('home'));
        } else {
            return view('auth.login');
//            return redirect(route('login'));
        }
//        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }
//        return redirect()->back()->withErrors([
//            'approve' => 'Wrong password or this account not approved yet.',
//        ]);
        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout()
    {
        if (auth()->user()) {
            Auth::logout();
            return redirect(route('logout'));
        } else {
            return redirect('login');
        }
    }

    public function home()
    {
        return view('layouts.index');
    }

    public function card()
    {
        $card = User::with('designation', 'university', 'program')->where('id', auth()->user()->id)->first();
        return view('layouts.card', compact('card'));
    }
}
