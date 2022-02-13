<?php

namespace App\Http\Controllers;

use App\Models\StudentTb;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createStudent($studentId = 0)
    {
        $studentDetail = StudentTb::where('id', $studentId)->first();

        return view('student_edit', ['studentDetail' => $studentDetail]);
    }

    public function submit(Request $request)
    {
        $studentData = $request->all();

        $updateOrSave = StudentTb::updateOrCreate(['id' => $studentData['studentId']], [
            'index_no' => $studentData['indexno'],
            'full_name' => $studentData['studentname'],
            'address' => $studentData['address'],
            'fathers_name' => $studentData['fathername'],
            'contact_no_1' => $studentData['conatctnumberOne'],
            'contact_no_2' => $studentData['conatctnumberTwo'],
            'memo' => $studentData['memo'],
            'grade_or_floor' => $studentData['grade_or_floor'],
        ]);

        return back()->with('success', 'Success');
        //return redirect()->route('createStudent/'.$studentData['studentId'])->with('msg', 'Hello');
        //  Redirect::back('createStudent/'.$studentData['studentId'])->withErrors(['msg', 'The Message']);
    }

    public function editLeaveForm()
    {
    }
}
