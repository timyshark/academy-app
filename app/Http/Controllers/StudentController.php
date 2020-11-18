<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
class vuStudent {
    public $id;
    public $first_name ;
    public $last_name;
    public $email;
    public $gender;
    public $school;
    public $dob;
    public $picturePath ;
}
class StudentController extends Controller
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
        // $students=Student::all();
        $students = DB::table('students')
            ->join('schools', 'students.school', '=', 'schools.code')
            ->select('students.id', 'students.first_name', 'students.last_name', 'students.email','students.isActive','students.gender','students.school as school_code''schools.name as school_name','students.dob','students.picturePath')
            ->get();
        return $students;
    }
 
    public function show(string $id)
    {
        return Student::find($id); //if id was passed
        //return $Student;
    }

    public function store(Request $request)
    {
        return Student::create($request->all());
    }

    public function update(Request $request,string  $id)
    {
        $Student = Student::findOrFail($id);  //if id was passed
        $Student->update($request->all());

        return $Student;
    }

    public function delete(Request $request,  $id)
    {
        $Student = Student::findOrFail($id);  //if id is passed
        $Student->delete();

        return 204;
    }
}
