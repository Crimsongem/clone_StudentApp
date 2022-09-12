<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
       $students = Student::all()->toArray();
       //$students = Student::getByFaculty(1)->toArray();
       var_dump($students);
    }

    public function create(){

    }

    public function update($student_id){

    }

    public function delete($student_id){

    }

    public function show($student_id){

    }
}
