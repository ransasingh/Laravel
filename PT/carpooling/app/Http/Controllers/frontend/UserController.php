<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.homepage');
    }

    public function login()
    {
        return view('frontend.login');
    }
    public function signup()
    {
        return view('frontend.signup');
    }

    public function customauthlogin(Request $request)
    {
        // dd("called");
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        // $credentials = $request->only('name', 'password');
        // if (Auth::attempt($credentials)) {
            
        //     return view('frontend.dashboard.homepage')
        //         ->withSuccess('Signed in');
        // }
 
        //  else {

        //     return redirect("login")->withSuccess('Login details are not valid');
        // }
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        // dd("called");
        $cpassword = $request->password_confirm;
        $password = $request->password;
        // dd($cpassword);
        // dd($password);

        $rules = array(
            'name'       => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:7|max:255'
        );
        // dd($request->all());
        $validator = Validator::make($request->all(), $rules);
        // dd( $validator);

        if ($validator->fails()) {
            return Redirect('/signup')
                ->withErrors($validator)
                ->withInput();
        } else {
            if ($password == $cpassword) {
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = bcrypt($request->password);
                $user->save();
                return Redirect('/login');
            } else {
                echo "password miss match";
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
