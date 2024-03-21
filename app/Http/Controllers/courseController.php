<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class courseController extends Controller
{
    //
    //for courses
    public function showCourses()
    {
        $course = Course::all();
        return view('coursesList', compact('course'));
    }

    public function addCourses(Request $req)
    {
        $req->validate([
            'course_name'=>'required',
            'course_code'=>'required',
            'class_id'=>'required'
        ]);

        $course = new Course;
        $course->course_name=$req->course_name;
        $course->course_code=$req->course_code;
        $course->class_id=$req->class_id;
        $course->save();
        return redirect('subjects');
    }

    public function deleteCourse($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect('subjects');
    }

    public function searchCourse(Request $req)
    {
        $search = $req->input('search');
        $course = Course::where('course_name','like','%'.$search.'%')
                       ->orWhere('course_code','like','%'.$search.'%')
                       ->orWhere('class_id','like','%'.$search.'%')
                       ->get();
        return view('coursesList',compact('course','search'));
    }

    public function editCourse($id)
    {
        $course = Course::find($id);
        return view('editcourse',['course'=>$course]);
    }

    public function updateCourse(Request $req)
    {
        $req->validate([
            'course_name'=>'required',
            'course_code'=>'required',
            'class_id'=>'required'
        ]);

        $course = Course::find($req->id);
        $course->course_name=$req->course_name;
        $course->course_code=$req->course_code;
        $course->class_id=$req->class_id;
        $course->save();
        return redirect('subjects');
    }

}