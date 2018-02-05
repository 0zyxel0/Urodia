@extends('master.layout-profile')
@section('content')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{asset('js/datatables.js')}}"></script>
    <script>
        $(document).ready(function () {
              
            var table = $('#dataTables').DataTable({
                "searching": false, "paging": false,
                "columnDefs": [
                    {
                        "targets": [1],
                        "visible": false,
                        "searchable": false
                    }
                ]
            });

  var table2 = $('#dataTables2').DataTable();

            $('#dataTables tbody').on('click', '#btn_viewRecord', function () {

                var data = table.row($(this).parents('tr')).data();
                window.location.href = '/urodia/public/viewCheckupRecord/' + data[1];



            });
            
            $('#dataTables2 tbody').on('click', '#btn_viewRecord2', function () {

                var data2 = table2.row($(this).parents('tr')).data();
               // alert(data);
                window.location.href = '/urodia/public/showdiagnosislist/' + data2[0];



            });

        });



    </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Patient Profile</h3>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="https://localhost:8899/urodia/public/images/picture.jpg" alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                            <h3>
                                @foreach($data as $id)
                                    {{$id["givenname"]}}
                            </h3>
                            <ul class="list-unstyled user_data">
                                <li>
                                    <i class="fa fa-map-marker user-profile-icon"></i>
                                    {{$id["address"]}}


                                </li>
                            </ul>

                            <br />
                            <a class="btn btn-info" href="/urodia/public/checkup/{{$id["partyid"]}}"><i class="fa fa-edit m-right-xs"></i>Add Check Up Record</a>
                            <br />
                            @endforeach

                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="profile_title">
                                <div class="col-md-6">
                                    <h2>Patient Report</h2>
                                </div>
                            </div>
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Check Up Timeline</a>
                                    </li>
                                    <li>
                                         <a href="#tab_content2" id="diag-tab" role="tab" data-toggle="tab" aria-expanded="true">Diagnosis Timeline</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                        <!-- start user projects -->
                                        <table width="100%" class="table table-striped table-bordered table-hover no-footer dtr-inline" id="dataTables" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Check Up Date</th>
                                                <th>Check Id</th>
                                                <th>Complaint Summary</th>
                                                <th>Complaint Details</th>
                                                <th>Diagnosis Details</th>
                                                <th>Treatment Details</th>
                                                <th>Options</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data2 as $i)
                                                <tr>
                                                    <td>{{$i['created_at']}}</td>
                                                    <td>{{$i['checkid']}}</td>
                                                    <td>{{$i['complaint_summary']}}</td>
                                                    <td>{{$i['complaint_details']}}</td>
                                                    <td>{{$i['diagnosis_details']}}</td>
                                                    <td>{{$i['treatment_details']}}</td>
                                                    <td>
                                                        <button class="edit-modal btn btn-info" id="btn_viewRecord">
                                                            <span class="glyphicon glyphicon-edit"></span> View
                                                        </button>
                                                        <button class="edit-modal btn btn-info">
                                                            <span class="glyphicon glyphicon-edit"></span> Edit
                                                        </button>
                                                        </td>
                                                </tr>
                                            @endforeach

                                            </tbody>

                                        </table>
                                        <!-- end user projects -->
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="diag-tab">
                                        <!-- start user projects -->
                                      <table width="100%" class="table table-striped table-bordered table-hover no-footer dtr-inline" id="dataTables2" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Check Up Date</th>
                                                <th>Options</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                                  @foreach($data3 as $q3)
                                                  <tr>
                                                      <td>{{$q3['checklistid']}}</td>
                                                      <td>{{$q3['created_at']}}</td>
                                                                    <td>
                                                        <button class="edit-modal btn btn-info" id="btn_viewRecord2">
                                                            <span class="glyphicon glyphicon-edit"></span> View
                                                        </button>
                                                        <button class="edit-modal btn btn-info">
                                                            <span class="glyphicon glyphicon-edit"></span> Edit
                                                        </button>
                                                        </td>
                                                  </tr>  
                                                  @endforeach

                                            </tbody>

                                        </table>
                                        <!-- end user projects -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
@stop