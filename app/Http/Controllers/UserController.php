<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function index()
    {
        return User::all();
    }
 
    public function show(string $id)
    {
        return User::find($id); //if id was passed
        //return $user;
    }

    public function store(Request $request)
    {
        return User::create($request->all());
    }

    public function update(Request $request,string  $id)
    {
        $user = User::findOrFail($id);  //if id was passed
        $user->update($request->all());

        return $user;
    }

    public function delete(Request $request,  $id)
    {
        $user = User::findOrFail($id);  //if id is passed
        $user->delete();

        return 204;
    }
}
