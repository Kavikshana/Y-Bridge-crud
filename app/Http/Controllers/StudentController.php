<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades; 
use App\Models\Student;

class StudentController extends Controller
{
    //
       public function create()
    {
       return view('users.create');
    }

    public function index()
    {
      $data = User::orderBy('id','desc')->paginate(10)->setPath('users');
        return view('users.index',compact(['data']));
    }


    
    
    
    
    
    
    /**public function getAllStudentsUsingModel()
    {
        $students =Student::all();
        return $students;
    }
    */
}
