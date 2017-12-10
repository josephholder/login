<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeNewUser;
use App\User;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;

class SignupController extends Controller
{
//    use Authenticatable;
    Use RedirectsUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * SignupController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.signup')->with([
            'rootPath' => app_path(),
            'message' => ''
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param storeNewUser $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewUser $request)
    {
        $user = new User();
        $user->fill([
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password'))
        ])->save();

        auth()->login($user);
        session()->flash('header', 'Thank You for Signing up');
        return redirect()->to('notes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //
    }
}
