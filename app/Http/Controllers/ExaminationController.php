<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Examination;
use App\Models\Setup;

class ExaminationController extends Controller
{
    //
    public function addsetUp(Request $req)
    {
        $req->validate([
            'start_mark'=>'required',
            'end_mark'=>'required',
            'grade'=>'required',
            'remarks'=>'required'
        ]);

        $data = new Setup;
        $data->start_mark=$req->start_mark;
        $data->end_mark=$req->end_mark;
        $data->grade=$req->grade;
        $data->remarks=$req->remarks;
        $data->save();
        return redirect('grading');

    }
    public function viewGrades()
    {
        $data = Setup::all();
        return view('gradeList',compact('data'));
    }
    public function deleteGrades($id)
    {
            $data = Setup::find($id);
            $data->delete();
            return redirect('exam');
    }
    public function editGrades($id)
    {
        $data = Setup::find($id);
        return view('editGrade',['data'=>$data]);
    }
    public function updateGrades(Request $req)
    {
            $req->validate([
                'start_mark'=>'required',
                'end_mark'=>'required',
                'grade'=>'required',
                'remarks'=>'required'
            ]);
    
            $data = Setup::find($req->id);
            $data->start_mark=$req->start_mark;
            $data->end_mark=$req->end_mark;
            $data->grade=$req->grade;
            $data->remarks=$req->remarks;
            $data->save();
            return redirect('grading');

    }
}
