
@extends('layouts.app')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js" defer></script>

@section('content')
    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Dashboard
            </div>
            <div class="panel-body">

                <div class="form-group col-md-9">

                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Index No</th>
                                <th>Full Name</th>
                                <th>Leave Type</th>
                                <th>Days</th>
                                <th>Edit</th>
                                <th>Print Preview</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($leaveDetails as $leave)
                            <tr>
                                <td>{{$leave->index_no}}</td>
                                <td>{{$leave->full_name}}</td>
                                <td>{{$leave->leave_type}}</td>
                                <td>{{$leave->number_of_leave_days}}</td>
                                <td><a href="{{url('editLeaveForm')}}/{{$leave->id }}">Edit</a></td>
                                <td><a href="{{url('printLeaveForm')}}/{{$leave->id }}">Print Preview</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Index No</th>
                                <th>Full Name</th>
                                <th>Leave Type</th>
                                <th>Days</th>
                                <th>Edit</th>
                                <th>Print Preview</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
            <script type="text/javascript" >
                $(document).ready(function() {
                    $('#example thead th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );

    $('#example').DataTable({
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
                $( 'input', this.header() ).on( 'keyup change clear', function () {
                   
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });
    
} );
            </script>
        @endsection

