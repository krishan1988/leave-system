<?php

namespace App\Http\Controllers;

use App\Models\LeaveDetailTb;
use App\Models\StudentLeaveAppliedTb;
use App\Models\StudentLeaveFormTb;
use App\Models\StudentTb;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $studentDetail = StudentTb::orderBy('id', 'DESC')->get();

        return view('home', ['studentDetail' => $studentDetail]);
    }

    public function requestLeaveForm(Request $request)
    {
        // var_dump($request->all());
        // die;

        $studentLeave = new StudentLeaveFormTb();
        $studentLeave->student_id = $request->studentId;
        $studentLeave->leave_type = $request->typeOfLeave;
        $studentLeave->form_number = $request->formno;
        $studentLeave->applied_date = $request->date;
        $studentLeave->reason = $request->reason;
        $studentLeave->number_of_leave_days = $request->days;
        $studentLeave->place = $request->place;
        $studentLeave->depature_date = $request->depature_date;
        $studentLeave->depature_time = $request->depature_time;
        $studentLeave->arrival_date = $request->arrival_date;
        $studentLeave->arrival_time = $request->arrival_time;
        $studentLeave->leave_approved_by = $request->approved_by;
        $studentLeave->save();

        $lastFormId = $studentLeave->id;

        return redirect('printLeaveForm/'.$lastFormId.'')->with('status', 'Successfully updated');
    }

    public function printLeaveForm($formId)
    {
        //  $leaveFormData = StudentLeaveFormTb::find($formId);

        $leaveFormData = StudentLeaveFormTb::join('student_tb', 'student_leave_form_tb.student_id', '=', 'student_tb.id')
        ->where('student_leave_form_tb.id', '=', $formId)->get(['student_leave_form_tb.*', 'student_tb.full_name', 'student_tb.index_no']);

        $leaveDetails = LeaveDetailTb::get();
        $leaveCount['Leave'] = 7;
        $leaveCount['ShortLeave'] = 7;
        $leaveCount['MedicalLeave'] = 14;
        foreach ($leaveDetails as $key => $value) {
            if ($value['leave_type'] == 1) {
                $leaveCount['Leave'] = $value['leave_count'];
            }
            if ($value['leave_type'] == 2) {
                $leaveCount['ShortLeave'] = $value['leave_count'];
            }
            if ($value['leave_type'] == 3) {
                $leaveCount['MedicalLeave'] = $value['leave_count'];
            }
        }

        $usedLeaveCount['Leave'] = 0;
        $usedLeaveCount['ShortLeave'] = 0;
        $usedLeaveCount['MedicalLeave'] = 0;

        $studentId = $leaveFormData[0]->student_id ?? 0;

        // Get Leave Count from student
        $leaveDetails = StudentLeaveAppliedTb::where('applied_year', '=', now()->year)
        ->where('student_id', '=', $studentId)
        ->get();

        foreach ($leaveDetails as $key => $value) {
            if ($value['applied_leave_type_id'] == 1) {
                $usedLeaveCount['Leave'] += $value['no_of_leave_days'];
            }
            if ($value['applied_leave_type_id'] == 2) {
                $usedLeaveCount['ShortLeave'] += $value['no_of_leave_days'];
            }
            if ($value['applied_leave_type_id'] == 3) {
                $usedLeaveCount['MedicalLeave'] += $value['no_of_leave_days'];
            }
        }
        //make the changes
        $availableLeaveCount['Leave'] = $leaveCount['Leave'] - $usedLeaveCount['Leave'];
        $availableLeaveCount['ShortLeave'] = $leaveCount['ShortLeave'] - $usedLeaveCount['ShortLeave'];
        $availableLeaveCount['MedicalLeave'] = $leaveCount['MedicalLeave'] - $usedLeaveCount['MedicalLeave'];

        $leaveFormData['availableLeaveCount'] = $availableLeaveCount;

        // Get Student details
        $studentData = StudentTb::find($studentId);
        $leaveFormData['studentData'] = $studentData;

        // var_dump($leaveFormData);
        // die;

        return view('leaveprint2', ['leaveFormData' => $leaveFormData]);
        //$dompdf = new Dompdf();
        // $invoice = PDF::loadView('leaveprint', ['leaveFormData' => $leaveFormData])->setOptions(['defaultFont' => 'sans-serif']);

        // return $invoice->stream('test.pdf');
    }

    public function fillLeaveForm($studentId)
    {
        // Get total leave Count
        $leaveDetails = LeaveDetailTb::get();
        $leaveCount['Leave'] = 7;
        $leaveCount['ShortLeave'] = 7;
        $leaveCount['MedicalLeave'] = 14;
        foreach ($leaveDetails as $key => $value) {
            if ($value['leave_type'] == 1) {
                $leaveCount['Leave'] = $value['leave_count'];
            }
            if ($value['leave_type'] == 2) {
                $leaveCount['ShortLeave'] = $value['leave_count'];
            }
            if ($value['leave_type'] == 3) {
                $leaveCount['MedicalLeave'] = $value['leave_count'];
            }
        }

        $usedLeaveCount['Leave'] = 0;
        $usedLeaveCount['ShortLeave'] = 0;
        $usedLeaveCount['MedicalLeave'] = 0;

        // Get Leave Count from student
        $leaveDetails = StudentLeaveAppliedTb::where('applied_year', '=', now()->year)
        ->where('student_id', '=', $studentId)
        ->get();

        foreach ($leaveDetails as $key => $value) {
            if ($value['applied_leave_type_id'] == 1) {
                $usedLeaveCount['Leave'] += $value['no_of_leave_days'];
            }
            if ($value['applied_leave_type_id'] == 2) {
                $usedLeaveCount['ShortLeave'] += $value['no_of_leave_days'];
            }
            if ($value['applied_leave_type_id'] == 3) {
                $usedLeaveCount['MedicalLeave'] += $value['no_of_leave_days'];
            }
        }
        //make the changes
        $availableLeaveCount['Leave'] = $leaveCount['Leave'] - $usedLeaveCount['Leave'];
        $availableLeaveCount['ShortLeave'] = $leaveCount['ShortLeave'] - $usedLeaveCount['ShortLeave'];
        $availableLeaveCount['MedicalLeave'] = $leaveCount['MedicalLeave'] - $usedLeaveCount['MedicalLeave'];

        $leaveFormData['availableLeaveCount'] = $availableLeaveCount;
        // Get Student details
        $studentData = StudentTb::find($studentId);
        $leaveFormData['studentData'] = $studentData;

        return view('leaveapply', ['leaveFormData' => $leaveFormData]);
        // Get Student details from student ID
    }

    public function appliedLeaveList()
    {
        $leaveDetails = StudentLeaveFormTb::join('student_tb', 'student_leave_form_tb.student_id', '=', 'student_tb.id')
        ->orderBy('student_leave_form_tb.id', 'DESC')->get(['student_leave_form_tb.*', 'student_tb.full_name', 'student_tb.index_no']);

        return view('appliedleave', ['leaveDetails' => $leaveDetails]);
    }
}
