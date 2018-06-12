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

    public function search(Request $request)
    {
        // $searchValue =$request->get('searchValue');
        // $search = Student::where('student_no','LIKE','%'.$searchValue.'%')->
        // orWhere('full_name','LIKE','%'.$searchValue.'%')->get();
        // if(count($search) > 0)
        //     return view('Macharia/searchResults',['students'=>$search]);
        // else return view ('Macharia/welcome')
        // ->withMessage('No Details found. Try to search again !');
        $searchValue =$request->get('searchValue');
        $search = Fees::where('student_id','LIKE','%'.$searchValue.'%')->get();
      
        return view('Macharia/allFees',['fees'=>$search]);
      
    }

    
    public function destroy($id)
    {
        
    }
}








