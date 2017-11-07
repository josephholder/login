<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login')->with([
            'message' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LoginUser $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginUser $request)
    {
        //TODO Validate before trying to authenticate a user
        if (Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
            ])
        ){
            // Authentication passed...
            return redirect()->intended('/');
        } else {
            return redirect('/login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //TODO Create a log out method
        Auth::logout();
        return redirect()->home();
    }
}
