<?php

namespace App\Http\Controllers;

use App\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NotesController extends Controller
{
    /**
     * NotesController constructor.
     */
    public function __construct()
    {
        Parent::__construct();
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Notes $notes
     * @return \Illuminate\Http\Response
     */
    public function index(Notes $notes)
    {
        return view('pages.notes')->with([
            'josephPath' => 'http://josephholder.com/',
            'notes' => $notes->getNotes(Auth::id())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Notes $notes
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Notes $notes)
    {
        $notes->fill([
            'user_id' => Auth::id(),
            'note' => $request->input('notes')
        ])->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notes $notes
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show(Notes $notes, $id)
    {
        return view('pages.notes')->with([
            'josephPath' => 'http://josephholder.com/',
            'notes' => $notes->where([
                'id' => $id,
                'user_id' => Auth::id()
            ])->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Notes $notes
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notes $notes, $id)
    {
        $notes->where('id',$id)
                ->update(['note' =>  $request->input('note')]);
        return redirect()->to('/notes/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notes $notes
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notes $notes, $id)
    {
        $notes->where('id',$id)->first()->delete();
        return redirect()->to('/notes');
    }
}
