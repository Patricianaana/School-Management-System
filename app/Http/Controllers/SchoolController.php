<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class SchoolController extends Controller
{
    //for students
    public function addStudent(Request $req)
    {
        $req->validate([
            'student_id'=>'required',
            'name'=>'required',
            'age'=>'required',
            'email'=>'required',
            'address'=>'required | min:5' ,
            'contact'=>'required | max:20',
            'nationality'=>'required',
            'classes_id'=>'required'
        ]);
      $data = new Student;
      $data->student_id=$req->student_id;
      $data->name=$req->name;
      $data->age=$req->age;
      $data->email=$req->email;
      $data->address=$req->address;
      $data->contact=$req->contact;
      $data->nationality=$req->nationality;
      $data->classes_id=$req->classes_id;
      $data->save();
      return redirect('users');
    }
    public function showStudent()
    {
        $data = Student::all();//pagination
        return view('studentList',compact('data'));
    }


    public function searchStudent(Request $req)
    {
        $search = $req->input('search');
        $data = Student::where('student_id','like','%'.$search.'%')
                       ->orWhere('name','like','%'.$search.'%')
                       ->orWhere('age','like','%'.$search.'%')
                       ->orWhere('email','like','%'.$search.'%')
                       ->orWhere('address','like','%'.$search.'%')
                       ->orWhere('contact','like','%'.$search.'%')
                       ->orWhere('nationality','like','%'.$search.'%')
                       ->orWhere('classes_id','like','%'.$search.'%')
                       ->get();
        return view('studentList',compact('data','search'));
    }

    public function deleteStudent($id)
    {
        $data = Student::find($id);
        $data->delete();
        return redirect('users');
    }

    public function editStudent($id)
    {
        $data = Student::find($id);
        return view('editStudent',['data'=>$data]);
    }

    public function updateStudent(Request $req)
    {
        $req->validate([
            'student_id'=>'required',
            'name'=>'required',
            'age'=>'required',
            'email'=>'required',
            'address'=>'required | min:5' ,
            'contact'=>'required | max:20',
            'nationality'=>'required',
            'classes_id'=>'required'
        ]);

        $data = Student::find($req->id);
        $data->student_id=$req->student_id;
        $data->name=$req->name;
        $data->age=$req->age;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->contact=$req->contact;
        $data->nationality=$req->nationality;
        $data->classes_id=$req->classes_id;
        $data->save();
        return redirect('users');
    }
}