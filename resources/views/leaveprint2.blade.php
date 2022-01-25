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
        <p onclick="PrintElem('#printarea')"  id="print-btn"></p>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <div class="image" style="width: 100%;display:flex">
                    <div style="width: 20%">
                        <img src="{{ asset('img/collageLogo.jpg') }}" width="100" height="140">
                </div>
                <div style="width:80%"> 
                    <img src="{{ asset('img/college_image.jpg') }}" width="600px" height="150" class="image1">
                </div>
                </div>
            </div>
        </nav>
        <hr>

        <div class="container">
            <div class="row" style="padding-left: 300px;display:flex">
                <div style="width: 70%">
                <label class="control-label">விடுமுறை அனுமதி கோரல் </label>
                <br>
                <label class="control-label">Permission For Leave Form</label>
                
            </div>

            <div style="width: 30%">
                <label class="control-label">திகதி</label>
                <br>
                <label class="control-label">Date</label>
                
                <input type="date" class="form-control-sm-8" id="date" name="date"  value="{{$leaveFormData[0]->applied_date ?? ""}}" placeholder="Date">
            </div>
            </div>
            
            <div class="row">
                     
               
            </div>
            <form class="form-horizontal">

               
                <br><br>
                <div class="row" style="padding-left: 100px">
                    <div class="student">
                        <div class="col-lg-6" style="display: flex">
                        <div class="form-group">
                            <label class="control-label col-md-3">மாணவர் பெயர் </label>
                            <br>
                            <label class="control-label col-md-3">Student Name</label>
                           
                            
                        </div>
                        <div class="col-sm-8" style="padding-left: 30px">
                            <input type="text" class="form-control" id="conatctnumber" name="conatctnumber" value="{{$leaveFormData[0]->full_name ?? ""}}">
                        </div>
                        <div class="form-group" style="padding-left: 100px">
                            <label class="control-label col-md-3">சுட்டெண் </label>
                            <br>
                        <label class="control-label col-md-3">Index Number</label>
                       
                        
                        </div>
                        <div class="col-sm-4" style="padding-left: 30px">
                            <label>{{$leaveFormData[0]->index_no ?? ""}}</label>
                          
                        </div>
                        </div>
    
                
                       
                    </div>
                    <br>

                    <div class="form-group" style="display: flex">
                        <div>
                        <label class="control-label col-md-2">செல்லுமிடம்</label>
                        <br>
                        <label class="control-label col-md-2">Place</label>
                    </div>
                        <div class="input col-sm-9" style="padding-left: 51px;">
                            <input type="text" class="form-control" id="place" name="place" value="{{$leaveFormData[0]->place ?? ""}}" style="width: 500px;">
                        </div>
                    </div>
                    <br>
                    <div class="form-group" style="display: flex">
                        <div>
                        <label class="control-label col-md-2">செல்லும் காரணம்</label>
                        <br>
                        <label class="control-label col-md-2">Reason</label>
                        </div>
                        <div class="col-sm-9" style="padding-left: 45px;">
                            <input type="text" class="form-control" id="reason" name="reason" value="{{$leaveFormData[0]->reason ?? ""}}" style="width: 500px;">
                        </div>
                    </div>

                    <br>
                    <div class="container1">
                        <div class="row" style="display: flex">
    

                                <div class="form-group col-md-7">
                                    <label for="inputState">கல்லூரியிலிருந்து புறப்படும் திகதி</label>
                                    <br>
                                    <label for="inputState">Date of departure from the College</label>
                                </div>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" id="place" name="" value="{{$leaveFormData[0]->depature_date ?? ""}}">
                                    </div>
                                
                            

                          
                                <div class="form-group col-md-7" style="padding-left: 20px">
                                    <label for="inputState">நேரம்</label>
                                    <br>
                                    <label for="inputState">Time</label>
                                </div>
                                    <div class="col-sm-12" style="padding-left: 20px">
                                        <input type="time" class="form-control" id="time" name="" value="{{$leaveFormData[0]->depature_time ?? ""}}">
                                    </div>
                                </div>
                           
                        </div>
                        <br>


                        <div class="row" style="display: flex">
                           

                                <div class="form-group col-md-7">
                                    <label for="inputState">திரும்ப வரவேண்டிய திகதி </label>
                                    <br>
                                    <label for="inputState">Date of Arrival</label>
                                </div>
                                    <div class="col-sm-12" style="padding-left: 50px">
                                        <input type="date" class="form-control" id="place" name="" value="{{$leaveFormData[0]->arrival_date ?? ""}}">
                                    </div>
                                




        

                    
                                <div class="form-group col-md-7" style="padding-left: 20px">
                                    <label for="inputState">நேரம்</label>
                                    <br>
                                    <label for="inputState">Time</label>
                                </div>
                                    <div class="col-sm-12" style="padding-left: 30px">
                                        <input type="text" class="form-control" id="time" name="" value="{{$leaveFormData[0]->arrival_time ?? ""}} ">
                                    </div>
                               
                            
                        </div>
                    </div>
                    <br><br>
                    <div class="row" style="display: flex;padding-left:100px">
                        
                        
                                <div class="col-sm-12">
                                    <label for="">...................................</label>
                                    <br>
                                    <label for="isectionalhead">பகுதிப் பொறுப்பாசிரியர்</label>
                                    <br>
                                    <label for="isectionalhead">Sectional Head</label>
                                    
                                </div>
                            
                       

                        
                            
                            <br>
                                <div class="col-sm-12" style="padding-left: 20px">
                                    <label for="">..........................................</label>
                                    <br>
                                    <label for="principle">அதிபர் / உப அதிபர் </label>
                                    <br>
                                    <label for="principle">Principle/Vice Principle</label>
                                    
                                </div>
                           
                            <br>
                                <div class="col-sm-12" style="padding-left: 20px">
                                    <label for="">...................................</label>
                                    <br>
                                    <label for="Signature">பெற்றோர் பாதுகாவலர் கையொப்பம். </label>
                                    <br>
                                    <label for="Signature">Parents or Guardian Signature</label>
                                   
                                </div>
                    </div>
<br>
                    <hr>

                    <div class="panel panel-default" style="display: flex" >
                      
                       
                                <div class="form-group col-md-7" style="padding-left: 100px">
                                    <label for="balance">Balance Leave</label>
                                    <br>
                                    <input type="text" class="form-control" id="balanceleave" value="{{$leaveFormData["availableLeaveCount"]['Leave']}}">
                                </div>
                                
                            
                                <div class="form-group col-md-7" style="padding-left: 20px">
                                    <label for="balance">Balance Short Leave</label>
                                    <br>
                                    <input type="text" class="form-control" id="balanceshortleave" value="{{$leaveFormData["availableLeaveCount"]['ShortLeave']}}">
                                </div>
                                
                            
                                <div class="form-group col-md-7" style="padding-left: 20px">
                                    <label for="balance">Balance Medical Leave</label>
                                    <br>
                                    <input type="text" class="form-control" id="balancemedicalleave" value="{{$leaveFormData["availableLeaveCount"]['MedicalLeave']}}">
                                </div>
                               
                               

                          
                                <div class="form-group col-md-7" style="padding-left: 20px">
                                    <label for="balance">Addition Leave</label>
                                    <br>
                                    <input type="text" class="form-control" id="additionleave" value="">
                                </div>
                                <br>
                                  
                                
                            </div>
                            <br>
<hr>
                       
                        <div class="panel panel-default">
                            <div class="note">
        
                                <label for="note">குறிப்பு : குறித்த நேரத்தில் சமூகமளிக்கத்தவரும் பட்சத்தில் தகுந்த நடவடிக்கை எடுக்கப்படும். </label>
                                <label for="note">Note : Disciplined action will be talen if not reached on time</label><br>
                               
                            </div>
                        </div>

                    </div>
                </div>


            </form>
</body>

</html>

<script>

window.onload = function(){
    var button = document.getElementById('print-btn');
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

         mywindow.document.write('<link rel="stylesheet" media="print" href="{{ asset('css/print.css') }}" type="text/css"/>');
         
     
        mywindow.document.write('</head><body>');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');
        document.getElementById("print-btn").style.display="none";
        mywindow.print();
        mywindow.close();

        return true;
    }
</script>
