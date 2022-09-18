<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $title = "Student Register Form";
        $url = url("/register");
        $data = compact('title','url');
        return view('form')->with($data);
    }

    public function all(){
        $students =  Task::all();
        $data= compact('students');
        return view('students')->with($data);
    }

    public function save(Request  $request){
        $data  = $request->validate([
            'name'=>'required|min:3|max:20',
            'age'=>'required',
            'roll_number'=>'required',
            'branch'=>'required',
            'dob'=>'required',
        ]);

        $task = new Task();
        $task->fill($data);
        $task->save();

        return redirect('/show');
    }

    public function delete_fn($id){
        Task::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id){
        $student = Task::find($id);
        if(is_null($student)){
            return redirect('/show');
        }else{
            $title = "update page";
            $url = url('/form/update')."/".$id;
            $data =compact('title','student','url');
            return view('form')->with($data);
        }
    }

    public function update($id,Request $request){
        $student = Task::find($id);
        $student->fill();
        $student->save();
        return redirect('/show');
    }
}
