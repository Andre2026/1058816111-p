<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
    public function store(Request $id)
    {
        $request -> validate ([
            User = new user
            'name'
        ])

    }

    /**
     * Display the specified resource.
     */
    public function show(User $id)
    {
        $user= user::fin($id)
        return view('show.user',compact('user'))
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $id)
    {
        $User = user:: find ($id)
        return view ('user.edit'compact('user'))

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user -> update $request-> all();
            return redirect()->route('user.index')
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $id)
    {
            $user -> delete();
            return redirect()->route('user.index')
    }
}
