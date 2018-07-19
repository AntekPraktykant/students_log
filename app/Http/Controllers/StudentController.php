<?php

namespace App\Http\Controllers;

use App\DailyStatus;
use Illuminate\Http\Request;
use App\Student;
use DB;

class StudentController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $students = Student::students();

        return view ('students.index', compact('students'));
    }

    public function show(Student $student){

        return view ('students.show', compact('student'));
    }

    public function create(){
        return view ('students.create');
    }

    public function store(){

        $this -> validate(request(), [
            'name' => 'required'
        ]);

        Student::create([
            'name' => request('name'),
        ]);

        return redirect()->home()->with('message', 'Nowy student dodany');
    }
}
