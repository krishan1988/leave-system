@extends('layouts.app')

@section('content')
    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Student Create / Edit
            </div>
            <div class="panel-body">

                <div class="form-group col-md-9">
                    @if (session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                    <div class="panel panel-default studentdetail">
                      
                       
                        <div class="panel panel-default col-sm-11 st">
                            <legend>
                                <h2 class="student">STUDENT DETAILS</h2>
                            </legend>
                           
                            <form method="POST" class="form-horizontal leave-form" action="{{ route('applyLeaveForm') }}"
                                enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3">Index No :</label>
                                    <div class="input col-sm-9">
                                        <input type="text" class="form-control" required="required" id="indexno"
                                            placeholder="Correct Index Number" name="indexno" value="{{$studentDetail->index_no ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Student Name :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="studentname" name="studentname"
                                            required="required" value="{{$studentDetail->full_name ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Address :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  value="{{$studentDetail->address ?? ''}}" id="address" name="address"
                                            required="required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Father Name :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fathername" name="fathername"
                                            required="required" value="{{$studentDetail->fathers_name ?? ''}}">
                                    </div>
                                </div>

                                <?php //var_dump( intval($studentDetail->grade_or_floor));die; ?>
                                <div class="form-group">

                                    <label class="control-label col-md-3">Grade or Floor:</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="exampleSelect" name="grade_or_floor">

                                            {{$select = ""}}
                                            @for($i = 1; $i <= 14; $i++)

                                            @if($i == intval($studentDetail->grade_or_floor??""))

                                                    {{$select = "selected"}}
                                            @else
                                                     {{$select = ""}}
                                            @endif

                                            @if($i<8)
                                                 <option value="{{$i}}" {{$select}}>Grade {{$i}}</option>
                                                 @elseif($i==8)
                                                 <option value="{{$i}}" {{$select}}>Ground floor</option> 
                                                 @else
                                                 <option value="{{$i}}" {{$select}}>Floor {{$i-8}}</option> 
                                                 @endif
                                            @endfor
                                           
                                           
                                          </select>
                                    </div>

                                </div>
                                <div class="form-group">

                                    <label class="control-label col-md-3">Memo:</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" class="form-control" id="conatctnumber"
                                            name="memo" required="required" value="{{$studentDetail->memo ?? ''}}">{{$studentDetail->memo ?? ''}}</textarea>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6">

                                        <label class="control-label col-md-5">Contact No 1 :</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="conatctnumber"
                                                name="conatctnumberOne" required="required" value="{{$studentDetail->contact_no_1 ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">

                                        <label class="control-label col-md-4">Contact No 2:</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="conatctnumber"
                                                name="conatctnumberTwo" required="required" value="{{$studentDetail->contact_no_2 ?? ''}}">
                                        </div>

                                    </div>
                                    
                                    <br>
                                    <hr class="hr">
                                    <br>
                                    <div class="form group">
                                        <div class="row">
                                            <div class="col-sm-offset-9">
                                                <input type="hidden" name="studentId" value="{{$studentDetail->id ?? ''}}">
                                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        @endsection