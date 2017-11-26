@extends('master.layout-profile')
@section('content')
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/datatables.js')}}"></script>


    <script>
        $(document).ready(function() {
            var table =  $('#dataTables').DataTable({
                "columnDefs":
                    [
                        {
                            "targets": 0,
                            "visible": false,
                            "searchable": false
                        }

                    ]
            });

            $('#dataTables tbody').on( 'click', '#btn_viewProfile', function () {

                var data = table.row( $(this).parents('tr') ).data();
                window.location.href='profile/'+data[0];



            });

        } );



    </script>

    <!-- page content -->
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">


            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Table design <small>Custom design</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                <thead>
                                <tr>

                                    <th>Party ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Middle Name</th>
                                    <th>Birthday</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Obs</th>
                                    <th>Menopause</th>
                                    <th>Gender</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr {{$item['id']}}>
                                        <td>{{$item['partyid']}}</td>
                                        <td>{{$item['givenname']}}</td>
                                        <td>{{$item['familyName']}}</td>
                                        <td>{{$item['middlename']}}</td>
                                        <td>{{$item['birthday']}}</td>
                                        <td>{{$item['age']}}</td>
                                        <td>{{$item['address']}}</td>
                                        <td>{{$item['email']}}</td>
                                        <td>{{$item['obsIns']}}</td>
                                        <td>{{$item['menopause']}}</td>
                                        <td>{{$item['gender']}}</td>
                                        <td>

                                            <button class="edit-modal btn btn-info" id="btn_viewProfile">
                                                <span class="glyphicon glyphicon-edit"></span> View
                                            </button>
                                            <button class="edit-modal btn btn-info">
                                                <span class="glyphicon glyphicon-edit"></span> Edit
                                            </button>
                                            <button class="delete-modal btn btn-danger">
                                                <span class="glyphicon glyphicon-trash"></span> Delete
                                            </button></td>
                                    </tr>
                                @endforeach




                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /page content -->


    </div>
    </div>
    </body>


    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/jquery.mCustomScrollbar.js')}}"></script>
@stop