<?php

namespace App\Http\Controllers;
use App\Student;
use App\Fees;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
  
    public function index()
    {
        $student= Student::all();
        return view('Macharia/allStudents',['students'=>$student]);
    }

    public function create()
    {
        return view('Macharia/students');
    }


    public function store(Request $request)
    {
         $student = new Student();
         $student->student_no = $request->input('student_no');
         $student->full_name = $request->input('full_name');
         $student->DOB = $request->input('DOB');
         $student->address=$request->input('address');
         $student->save();
 
               return redirect('Macharia/students');
      
    }

    public function edit($id)
    {
        
    }

    public function search(Request $request, $id)
    {
        $student_no = $_GET['student_no'];
    
        $student = \App\Student::where([ 
            ['student_no', 'LIKE', '%' . $student_no . '%']])->get();
    
        return view('Macharia/searchResults');
        
    }

    
    public function destroy($id)
    {
        
    }
}
