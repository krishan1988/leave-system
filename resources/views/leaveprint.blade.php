<!DOCTYPE html>
<html lang="en">

<head>
    <title>Leave Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/print.css') }}" media="print">

</head>
<style>
    @media print {
        body * {
            visibility: hidden;
        }

        .printarea,
        .printarea * {
            visibility: visible;
        }

        #print-btn {
            display: none;
        }
    }

</style>


<body id='printarea'>
    <div class="text-center">
        <button onclick="PrintElem('#printarea')" id="print-btn"> Print This Page</button>
        <br>
        <a href="{{url('/appliedLeaveList')}}" id="homelink">Back to Home</a>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark" style="text-align: center">
            <div class="container-fluid">
                <div class="image" style="width: 100%;">
                    <h1>AL-HAQQANIYYAH ARABIC COLLEGE</h1>
                    <h2>DASKARA, MURUTHAGAHAMULA, SRI LANKA</h2>
                    <h3>081 2316 313 – 0770252582</h3>
                </div>
            </div>
        </nav>
        <hr>

        <div class="container">
            <div class="row">
                <div style="text-align:center">

                    <h2>Permission For Leave Form</h2>

                </div>
            </div>
            <div style="width: 80%;padding-left: 100px;text-align:end">


                <label class="control-label">Form No : </label><label class="control-label">{{$leaveFormData[0]->form_number ?? ""}}</label><br>
                <label class="control-label">Date : </label><label class="control-label">{{$leaveFormData[0]->applied_date ?? ""}}</label>

            </div>

            <form class="form-horizontal">
                <div class="row" style="padding-left: 100px">
                    <div class="student">
                        <div class="col-lg-6">
                            <div><label>Student Details
                                    ...................................................................................................................................................</label><br>
                            </div>
                            <br>
                            <div class="form-group" style="display: flex;padding-left: 56px;">
                                <br>
                                <label class="control-label col-md-3" style="padding-right: 86px;font-weight: bold;">Name</label>
                                <label class="control-label col-md-3">: {{$leaveFormData['studentData']->full_name ?? ""}}</label>

                            </div><br>
                            <div class="form-group" style="display: flex;padding-left: 56px;">

                                <label class="control-label col-md-3" style="padding-right: 70px;font-weight: bold;">Address</label>
                                <label class="control-label col-md-3">: {{$leaveFormData['studentData']->address ?? ""}}</label>

                            </div><br>
                            <div class="form-group" style="display: flex;padding-left: 56px;">

                                <label class="control-label col-md-3" style="padding-right: 27px;font-weight: bold;">Grade or floor</label>
                                <label class="control-label col-md-3">: {{$leaveFormData['studentData']->grade_or_floor  ?? ""}}</label>

                            </div>

                            <br>
                            <div class="col-lg-6">
                                <div><label>Leave Details
                                        ...................................................................................................................................................</label><br>
                                </div>
                                <br>
                                <div class="form-group" style="display: flex;padding-left: 56px;">
                                    <br>
                                    <label class="control-label col-md-3" style="padding-right: 29px;font-weight: bold;">Type of Leave</label>
                                    <label class="control-label col-md-3">: {{$leaveFormData[0]->leave_type  ?? ""}}</label>

                                </div><br>
                                <div class="form-group" style="display: flex;padding-left: 56px;">

                                    <label class="control-label col-md-3" style="padding-right: 75px;font-weight: bold;">Reason</label>
                                    <label class="control-label col-md-3">: {{$leaveFormData[0]->reason  ?? ""}}</label>

                                </div><br>
                                <div class="form-group" style="display: flex;padding-left: 56px;">

                                    <label class="control-label col-md-3" style="padding-right: 44px;font-weight: bold;">Place</label>
                                    <label class="control-label col-md-3">: {{$leaveFormData[0]->place  ?? ""}}</label>

                                </div>
                                <br>
                                <div class="row" style="display: flex;padding-left: 56px;">


                                    <div class="form-group col-md-7">

                                        <label for="inputState" style="padding-right: 17px;font-weight: bold;">Date of departure from College</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <label style="control-label col-md-3">: {{$leaveFormData[0]->depature_date ??""}}</label>
                                    </div>




                                    <div class="form-group col-md-7" style="padding-left: 51px">

                                        <label for="inputState" style="font-weight: bold">Time</label>
                                    </div>
                                    <div class="col-sm-12" style="padding-left: 20px">
                                        <label style="control-label col-md-3">: {{$leaveFormData[0]->depature_time ??
                                            ""}}</label>
                                    </div>
                                </div>
                                <br>
                                <div class="row" style="display: flex;padding-left: 56px;">


                                    <div class="form-group col-md-7">

                                        <label for="inputState" style="padding-right: 128px;font-weight: bold;">Time to arrival</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <label style="control-label col-md-3">: {{$leaveFormData[0]->arrival_date ??
                                            ""}}</label>
                                    </div>




                                    <div class="form-group col-md-7" style="padding-left: 51px">

                                        <label for="inputState" style="font-weight: bold;">Time</label>
                                    </div>
                                    <div class="col-sm-12" style="padding-left: 20px">
                                        <label style="control-label col-md-3">: {{$leaveFormData[0]->arrival_time ?? ""}}</label>
                                    </div>
                                </div>

                            </div>

                            <hr>

                        </div>


                    </div>
                    <br>
                    <div class="row" style="display: flex;">


                        <div class="col-sm-12" style="padding: 27px;border: 1px solid;text-align: center;">
                            <label for="">Total Number of Leave @ 2022</label>
                            <br>
                            <br>
                            <label for="isectionalhead" style="font-size: x-large;">{{$leaveFormData['availableLeaveCount']["Leave"] ?? ""}}</label>

                        </div>

                        <br>
                        <div class="col-sm-12" style="padding: 27px;border: 1px solid;margin-left: 10px;text-align: center;">
                            <label for="">Total Number of Short Leave @ 2022</label>
                            <br>
                            <br>

                            <label for="principle" style="font-size: x-large;">{{$leaveFormData['availableLeaveCount']["ShortLeave"] ?? ""}}</label>

                        </div>

                        <br>
                        <div class="col-sm-12" style="padding: 27px;border: 1px solid;margin-left: 10px;text-align: center;">
                            <label for="">Total Number of Medical Leave @ 2022</label>
                            <br>
                            <br>
                            <label for="Signature" style="font-size: x-large;">{{$leaveFormData['availableLeaveCount']["MedicalLeave"] ?? ""}}</label>

                        </div>
                    </div>
                    <br>
                    <div class="panel panel-default" style="text-align: center">
                        <div class="note">
                            <label for="note">Note : Disciplined action will be talen if not reached on time</label><br>

                        </div>
                    </div>
                    <hr>

                    <div class="panel panel-default" style="text-align: center">
                        <div class="note">
                            <label for="note">Office Use only</label><br>

                        </div>
                    </div>
<br>
                    <div class="panel panel-default" style="display: flex">


                        <div class="form-group col-md-7" style="padding-left: 100px">
                            <label for="balance">Actual arrival date</label>
                            
                            <label>...............{{$leaveFormData[0]->actual_arival_date ?? ""}}.............</label>
                        </div>


                        <div class="form-group col-md-7" style="padding-left: 20px">
                            <label for="balance">Time</label>
                 
                            <label>................{{$leaveFormData[0]->actual_arival_time ?? ""}}..............</label>
                        </div>


                    </div>
                
                </div>
        </div>


        </form>
</body>

</html>

<script>
    window.onload = function() {
        var button = document.getElementById('print-btn');
        button.click();
       //window.location.replace("{{url('appliedLeaveList')}}");
    }

    function PrintElem(elem) {
        Popup($('<div/>').append($(elem).clone()).html());
    }

    function Popup(data) {


        var mywindow = window.open('', '_blank');

        // mywindow.document.write('<scr' + 'ipt src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scr' + 'ipt>');
        // mywindow.document.write('<scr' + 'ipt src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></scr' + 'ipt>');
        // mywindow.document.write('<scr' + 'ipt src="//code.jquery.com/jquery-1.11.1.min.js"></scr' + 'ipt>');

        mywindow.document.write('<link rel="stylesheet" media="print" href="{{ asset("css/print.css") }}" type="text/css"/>');


        mywindow.document.write('</head><body><style> #print-btn,#homelink{display: none;}</style>');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');
       
        mywindow.print();
        document.getElementById("print-btn").style.display = "initial";
        mywindow.close();
       setTimeout(function(){history.back();}, 1000);

        return true;
    }

</script>
