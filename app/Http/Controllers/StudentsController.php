<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\studentsDetails;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function store(Request $request){
        $validates=$request->validate([ 
            'name'=>'required|string',
            'age'=>'required|integer',
            'email'=>'required|string',]); 

            Students::create($validates);
            return redirect('/studentsTable');
    }
    public function show(){
        $students=Students::all();
        return view('studentsTable', ['students' => $students]);
    }
    public function edit(Request $request, Students $students){

 $request = Students::find($students->id);
return view('updateStudentsPage', ['request'=>$request]);
    }
    public function delete(Request $request, Students $students){
        $request = Students::find($students->id);
        $request->delete();
        return redirect('/studentsTable');
    }
public function update(Request $request){

   
    $validates=$request->validate([
        'name'=> 'required|string',
        'age'=> 'required|integer',
        'email'=> 'required|string',
    ]);
    Students::find($request->id)->update($validates);
    

    return redirect('/studentsTable');
}
}
