<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUser;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest')->except('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login')->with([
            'message' => '',
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
            return redirect('/login')->withErrors('Login unsuccessful');
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
