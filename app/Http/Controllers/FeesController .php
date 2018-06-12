<?php

namespace App\Http\Controllers;
use App\Fees;

use Illuminate\Http\Request;

class FeesController extends Controller
{
  
    public function index()
    {
        $fees= Fees::all();
        return view('Macharia/totalFees',['fees'=>$fees]);
    }
    public function create()
    {
        return view('Macharia/fees');
    }

  
    public function store(Request $request)
    {
        $fees = new Fees();
        $fees->student_id = $request->input('student_id');
        $fees->date_of_payment = $request->input('date_of_payment');
        $fees->amount = $request->input('amount');
        $fees->save();

              return redirect('Macharia/fees');
    }

    public function totalFees()
    {
        $fees= new Fees();
        $fees->sum('amount');

         return view('Macharia/totalFees ',['fees'=>$fees]);
    }

    public function edit($id)
    {
        
    }
    public function update(Request $request, $id)
    {
        
    }
    public function destroy($id)
    {
        
    }
}
