<?php

namespace App\Http\Controllers;


use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Log;
class SchoolController extends Controller
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
        return School::all();
    }
 
    public function show(string $code)
    {
        return School::find($code); //if id was passed
        //return $user;
    }

    public function store(Request $request)
    {
        return School::create($request->all());
    }

    public function update(Request $request,string  $code)
    {
        $school = School::findOrFail($code);  //if id was passed
        $school->update($request->all());

        return $user;
    }

    public function delete(Request $request,  $code)
    {
        $school = School::findOrFail($code);  //if id is passed
        $school->delete();

        return 204;
    }
}
