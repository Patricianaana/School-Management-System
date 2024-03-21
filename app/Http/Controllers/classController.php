<?php

namespace App\Http\Controllers;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Student;

use Illuminate\Http\Request;

class classController extends Controller
{
    //
    public function showClasses()
    {
        $rooms= Classroom::all();
        return view('classesList',compact('rooms'));
    }

    public function addClasses(Request $req)
    {
        $req->validate([
            'class_name'=>'required',
            'building'=>'required'
        ]);

        $rooms = new Classroom;
        $rooms->class_name=$req->class_name;
        $rooms->building=$req->building;
        $rooms->save();
        return redirect('class');
    }

    public function editClasses($id)
    {
        $rooms = Classroom::find($id);
        return view('editClass',['rooms'=>$rooms]);
    }

    public function updateClasses(Request $req)
    {
        $req->validate([
            'class_name'=>'required',
            'building'=>'required'
        ]);

        $rooms = Classroom::find($req->id);
        $rooms->class_name=$req->class_name;
        $rooms->building=$req->building;
        $rooms->save();
        return redirect('class');
    }

    public function deleteClasses($id)
    {
        $rooms = Classroom::find($id);
        $rooms->delete();
        return redirect('class');
    }

    public function searchClasses(Request $req)
    {
        $search = $req->input('search');
        $rooms = Classroom::where('class_name','like','%'.$search.'%')
                       ->orWhere('building','like','%'.$search.'%')
                       ->get();
        return view('classesList',compact('rooms','search'));
    }

    public function viewClasses($id)
    {
        $rooms=Student::where('classes_id', $id)->get();
        $courses = Course::where('class_id', $id)->get();
        return view('viewClass',compact('courses', 'rooms'));

    }
}