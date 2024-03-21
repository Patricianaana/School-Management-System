<?php

namespace App\Http\Controllers;
use App\Models\Setup;
use App\Models\Course;
use App\Models\Record;
use App\Models\Classroom;

use App\Models\Examination;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    //
    public function createExams(Request $req)
    {
        $req->validate([
            'exams_name'=>'required',
            'Class_id'=>'required',
            'Course_id'=>'required'
        ]);
        $data = new Examination;
        $data->exams_name=$req->exams_name;
        $data->Class_id=$req->Class_id;
        $data->Course_id=$req->Course_id;
        $data->save();
        
        //Another way
        // Examination::create([
        //     'exams_name' => $req->exams_name,
        //     'Class_id' => $req->Class_id,
        //     'Course_id' => $req->Course_id
        // ]);
        return back();
    }

    public function viewExams()
    {
        $data = Examination::all();
        return view('examinationList', compact('data'));
    }

    public function deleteExams($id)
    {
        $data = Examination::find($id);
        $data->delete();
        return redirect('exams');
    }
    public function editExams($id)
    {
        $data = Examination::find($id);
        return view('editExamination',['data'=>$data]);
    }
    public function updateExams(Request $req)
    {
        $req->validate([
            'exams_name'=>'required',
            'Class_id'=>'required',
            'Course_id'=>'required'
        ]);

        $data = Examination::find($req->id);
        $data->exams_name=$req->exams_name;
        $data->Class_id=$req->Class_id;
        $data->Course_id=$req->Course_id;
        $data->save();
        return redirect('exams');
    }
    public function viewRecords($id)
    {
        $data = Record::where('examination_id', $id)->orderBy("exam_score", 'desc')->get();
       return view('RecordList', compact('data'));
    }

public function addRecords(Request $req)
{
    $grade = Setup::where('start_mark', '<=', $req->exam_score)->where('end_mark', '>=', $req->exam_score)->first();

    $data = Record::findOrNew($req->id);

    $data->Student_id = $req->Student_id;
    $data->exam_score = $req->exam_score;
    $data->examination_id = $req->examination_id;
    $data->grade_id = $grade->id;
    $data->save();

    // Redirect back to the records page
    return back();
}
public function deleteRecs($id)
{
    $data=Record::find($id);
    $data->delete();
    return redirect('records');
}

    

}
