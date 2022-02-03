
@extends('layouts.app')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
  
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js" defer></script>


@section('content')
    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Leave Report
            </div>
            <div class="panel-body">

                <div class="form-group col-md-9">

                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Index No</th>
                                <th>Full Name</th>
                                <th>Applied Date</th>
                                <th>Leave Type</th>
                                <th>Place</th>
                                <th>Number of leave days</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($leaveData["leaveformData"] as $leave)
                          <?php if($leave->leave_type == 1 ){
                              $leaveType = "Leave";
                          }elseif ($leave->leave_type == 2 ) {
                            $leaveType = "Short Leave";
                          }else {
                            $leaveType = "Medical Leave";
                          }
                          ?>
                            <tr>
                                <td>{{$leave->id}}</td>
                                <td>{{$leave->full_name}}</td>
                                <td>{{$leave->applied_date}}</td>
                                <td>{{$leaveType}}</td>
                                <td>{{$leave->place}}</td>
                                <td>{{$leave->number_of_leave_days}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Index No</th>
                                <th>Full Name</th>
                                <th>Applied date</th>
                                <th>Leave Type</th>
                                <th>Place</th>
                                <th>Number of leave days</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
            <script type="text/javascript" >
               $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
            </script>
        @endsection

