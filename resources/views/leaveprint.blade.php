<!DOCTYPE html>
<html lang="en">

<head>
    <title>Leave Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/print.css') }}" media="print">

</head>
<style>
    @media print{
        body *{
            visibility: hidden;
        }
        .printarea, .printarea * {
            visibility: visible;
        }
    }
</style>

<body id='printarea'>
    <div class="text-center">
        <button onclick="PrintElem('#printarea')"  class="btn btn-primary" id="print-btn">Print</button>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <div class="image">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('img/collageLogo.jpg') }}" width="140" height="140">
                    </a>
                    <img src="{{ asset('img/college_image.jpg') }}" width="800" height="150" class="image1">
                </div>
            </div>
        </nav>

        <div class="container">

            <legend>
                <h2 class="student">Permission For Leave Form</h2>
                <h2 class="student">விடுமுறை அனுமதி கோரல் </h2>

                <h2 class="student">Date</h2>
                <h2 class="student">திகதி</h2>
                <input type="date" class="form-control-sm-8" id="date" name="date" placeholder="Date">
            </legend>
            <div class="row">
                     
               
            </div>
            <form class="form-horizontal">

               
                <br><br>
                <div class="row">
                    <div class="student">
                        <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Student Name</label>
                            <label class="control-label col-md-3">மாணவர் பெயர் </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="conatctnumber" name="conatctnumber" value="{{$leaveFormData[0]->full_name ?? ""}}">
                            </div>
                        </div>
                        </div>
    
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label class="control-label col-md-3">Index Number</label>
                            <label class="control-label col-md-3">சுட்டெண் </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="indexnumber" name="indexnumber" value="{{$leaveFormData[0]->index_no ?? ""}}">
                            </div>
                            </div>
                        </div>
                       
                    </div>
                    <br><br><br>

                    <div class="form-group">
                        <label class="control-label col-md-2">Place</label>
                        <label class="control-label col-md-2">செல்லுமிடம்</label>
                        <div class="input col-sm-9">
                            <input type="text" class="form-control" id="place" name="place" value="{{$leaveFormData[0]->place ?? ""}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Reason</label>
                        <label class="control-label col-md-2">செல்லும் காரணம்</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="reason" name="reason" value="{{$leaveFormData[0]->reason ?? ""}}">
                        </div>
                    </div>

                    <div class="container1">
                        <div class="row">
                            <br><br>
                            <div class="col-lg-6">

                                <div class="form-group col-md-7">
                                    <label for="inputState">Date of departure from the College</label>
                                    <label for="inputState">கல்லூரியிலிருந்து புறப்படும் திகதி</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" id="place" name="" value="{{$leaveFormData[0]->depature_date ?? ""}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group col-md-7">
                                    <label for="inputState">Time</label>
                                    <label for="inputState">நேரம்</label>
                                    <div class="col-sm-12">
                                        <input type="time" class="form-control" id="time" name="" value="{{$leaveFormData[0]->depature_time ?? ""}}">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group col-md-7">
                                    <label for="inputState">Date of Arrival</label>
                                    <label for="inputState">திரும்ப வரவேண்டிய திகதி </label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" id="place" name="" value="{{$leaveFormData[0]->arrival_date ?? ""}}">
                                    </div>
                                </div>




                            </div>

                            <div class="col-lg-6">
                                <div class="form-group col-md-7">
                                    <label for="inputState">Time</label>
                                    <label for="inputState">நேரம்</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="time" name="" value="{{$leaveFormData[0]->arrival_time ?? ""}} ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group col-md-7">
                                <label for="">...................................</label>
                                <div class="col-sm-12">
                                    <label for="isectionalhead">Sectional Head</label>
                                    <label for="isectionalhead">பகுதிப் பொறுப்பாசிரியர்</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group col-md-7">
                                <label for="">..........................................</label>
                                <div class="col-sm-12">
                                    <label for="principle">Principle/Vice Principle</label>
                                    <label for="principle">அதிபர் / உப அதிபர் </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group col-md-7">
                                <label for="">...................................</label>
                                <div class="col-sm-12">
                                    <label for="Signature">Parents or Guardian Signature</label>
                                    <label for="Signature">பெற்றோர் பாதுகாவலர் கையொப்பம். </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group col-md-7">
                                    <label for="balance">Balance Leave</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="balanceleave" value="{{$leaveFormData["availableLeaveCount"]['Leave']}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group col-md-7">
                                    <label for="balance">Balance Short Leave</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="balanceshortleave" value="{{$leaveFormData["availableLeaveCount"]['ShortLeave']}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group col-md-7">
                                    <label for="balance">Balance Medical Leave</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="balancemedicalleave" value="{{$leaveFormData["availableLeaveCount"]['MedicalLeave']}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group col-md-7">
                                    <label for="balance">Addition Leave</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="additionleave" value="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="panel panel-default">
                            <div class="note">
                                <label for="note">Note :</label>
                                <label for="note">Disciplined action will be talen if not reached on time</label><br>
                                <label for="note">குறிப்பு : குறித்த நேரத்தில் சமூகமளிக்கத்தவரும் பட்சத்தில் தகுந்த நடவடிக்கை எடுக்கப்படும். </label>
                            </div>
                        </div>

                    </div>
                </div>


            </form>
</body>

</html>

<script>

window.onload = function(){
    //var button = document.getElementById('print-btn');
    button.click();
    window.location.replace("{{url('appliedLeaveList')}}");
}

  function PrintElem(elem)
    {
        Popup($('<div/>').append($(elem).clone()).html());
    }

    function Popup(data) 
    {
    
    
        var mywindow = window.open('', 'my div', 'height=2550,width=1650');
     
        // mywindow.document.write('<scr' + 'ipt src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scr' + 'ipt>');
        // mywindow.document.write('<scr' + 'ipt src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></scr' + 'ipt>');
        // mywindow.document.write('<scr' + 'ipt src="//code.jquery.com/jquery-1.11.1.min.js"></scr' + 'ipt>');

         mywindow.document.write('<link rel="stylesheet" media="print" href="{{ asset('css/print.css') }}" type="text/css" />');
         
     
        mywindow.document.write('</head><body>');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        ///mywindow.close();

        return true;
    }
</script>
