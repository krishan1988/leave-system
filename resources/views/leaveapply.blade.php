@extends('layouts.app')

@section('content')
    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Dashboard
            </div>
            <div class="panel-body">

                <div class="form-group col-md-9">

                    <div class="panel panel-default studentdetail">

                        <div class="panel panel-default col-sm-11 st">
                            <legend>
                                <h2 class="student">STUDENT DETAILS</h2>
                            </legend>
                            <form method="POST" class="form-horizontal leave-form" action="{{ route('applyLeaveForm') }}"
                                enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label class="control-label col-md-2">Index No :</label>
                                    <div class="input col-sm-9">
                                        <input type="text" class="form-control" required="required" id="indexno"
                                            placeholder="Correct Index Number" name="indexno" readonly value="{{$leaveFormData["studentData"]->index_no ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Student Name :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="studentname" name="studentname"
                                            required="required" readonly value="{{$leaveFormData["studentData"]->full_name ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Address :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" readonly  value="{{$leaveFormData["studentData"]->address ?? ''}}" id="address" name="address"
                                            required="required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Father Name :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fathername" name="fathername"
                                            required="required" readonly value="{{$leaveFormData["studentData"]->fathers_name ?? ''}}">
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-6">

                                        <label class="control-label col-md-4">Contact No 1 :</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="conatctnumber"
                                                name="conatctnumberOne" required="required" readonly value="{{$leaveFormData["studentData"]->contact_no_1 ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">

                                        <label class="control-label col-md-4">Contact No 2:</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="conatctnumber"
                                                name="conatctnumberTwo" required="required" readonly value="{{$leaveFormData["studentData"]->contact_no_2 ?? ''}}">
                                        </div>

                                    </div>
                                    <br><br><br>
                                    <hr class="hr">

                                    <div class="row">
                                        <div class="col-lg-4">

                                            <label class="control-label1 col-md-4">Balance Leave</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="conatctnumber" readonly  value="{{$leaveFormData["availableLeaveCount"]["Leave"] ?? ''}}">
                                            </div>
                                        </div>



                                        <div class="col-lg-4">
                                            <label class="control-label1 col-md-6">Balance Short Leave</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="conatctnumber" readonly  value="{{$leaveFormData["availableLeaveCount"]["ShortLeave"] ?? ''}}">
                                            </div>
                                        </div>


                                        <div class="col-lg-4">

                                            <label class="control-label1 col-md-4">Balance Medical</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="conatctnumber" readonly  value="{{$leaveFormData["availableLeaveCount"]["MedicalLeave"] ?? ''}}">
                                            </div>


                                        </div>

                                    </div>

                                    <br>
                                    <div class="typeofleave">
                                        <div class="row">
                                            <div class="form-group">

                                                <label class="control-label col-md-3">Type of Leave :</label>
                                                <div class="col-sm-3">
                                                    <select id="typeofleave" class="form-control" name="typeOfLeave"
                                                        required="required">
                                                        <option selected></option>
                                                        <option value="1">Leave</option>
                                                        <option value="2">Short Leave</option>
                                                        <option value="3">Medical Leave</option>
                                                        <option></option>
                                                    </select>
                                                </div>

                                                <label class="control-label col-md-3">Form No :</label>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" id="fromno" name="formno"
                                                        required="required">
                                                </div>

                                            </div>

                                        </div>
                                        <div class="clearfix"></div>
                                        <br>
                                        <div class="row">


                                            <div class="form-group">
                                                <label class="control-label col-md-3">Date :</label>
                                                <div class="col-sm-6">
                                                    <input type="date" class="form-control" id="fromno" name="date"
                                                        required="required">
                                                </div>
                                            </div>

                                        </div>



                                        <div class="row">

                                            <br><br>

                                            <div class="form-group">

                                                <label class="control-label col-md-3">Reason :</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="reason" name="reason"
                                                        required="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Days:</label>
                                                <div class="col-sm-6">
                                                    <input type="number" class="form-control" id="days" name="days"
                                                        required="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Place :</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="place" name="place"
                                                        required="required">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-md-3">Date of departure from the College
                                                    :</label>
                                                <div class="col-md-3">
                                                    <input type="date" class="form-control" id="place"
                                                        name="depature_date" required="required">
                                                </div>

                                                <label class="control-label col-md-3">Time :</label>
                                                <div class="col-md-2">
                                                    <input type="time" class="form-control" id="place"
                                                        name="depature_time" required="required">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Date of Arrival :</label>
                                                <div class="col-md-3">
                                                    <input type="date" class="form-control" id="place" name="arrival_date"
                                                        required="required">
                                                </div>

                                                <label class="control-label col-md-3">Time :</label>
                                                <div class="col-md-2">
                                                    <input type="time" class="form-control" id="place" name="arrival_time"
                                                        required="required">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-md-3">Leave Approved by :</label>
                                                <div class="col-md-4">
                                                    <select id="inputState" class="form-control" name="approved_by"
                                                        required="required">
                                                        <option value="admin">Admin</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                    <br>
                                    <div class="form group">
                                        <div class="row">
                                            <div class="col-sm-offset-9">
                                                <input type="hidden" name="studentId" value="{{$leaveFormData["studentData"]->id ?? ''}}">
                                                <button type="submit" class="btn btn-primary btn-lg">Apply Leave</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        @endsection