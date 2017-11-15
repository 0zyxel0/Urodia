@extends('master.layout-profile')
@section('content')
    <script src="{{ asset('js/jquery.js') }}"></script>
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
                                    <img class="img-responsive avatar-view" src="http://localhost:8899/urodia/public/images/picture.jpg" alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                            <h3>
                                @foreach($data as $data)
                                    {{$data["givenname"]}}
                            </h3>

                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i>

                                    {{$data["address"]}}


                                </li>

                            </ul>

                            <a class="btn btn-success" href="http://localhost:8899/urodia/public/newDiagnosis/{{$data["partyid"]}}"><i class="fa fa-edit m-right-xs"></i>Add Diagnosis</a>
                            <br />
                            <a class="btn btn-info" href="http://localhost:8899/urodia/public/checkup/{{$data["partyid"]}}"><i class="fa fa-edit m-right-xs"></i>Add Check Up Record</a>
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
                                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Check Up Timeline</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Diagnosis Record</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                        <!-- start user projects -->
                                        <table class="data table table-striped no-margin">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Complaint</th>
                                                <th>Diagnosis</th>
                                                <th>Details</th>
                                                <th>Options</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>2014-23-06</td>
                                                <td>New Company Takeover Review</td>
                                                <td>Deveint Inc</td>
                                                <td class="hidden-phone">18</td>
                                                <td class="vertical-align-mid">
                                                    <button>View</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2014-23-04</td>
                                                <td>New Partner Contracts Consultanci</td>
                                                <td>Deveint Inc</td>
                                                <td class="hidden-phone">13</td>
                                                <td class="vertical-align-mid">
                                                    <button>View</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2014-09-05</td>
                                                <td>Partners and Inverstors report</td>
                                                <td>Deveint Inc</td>
                                                <td class="hidden-phone">30</td>
                                                <td class="vertical-align-mid">
                                                    <button>View</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2016-23-08</td>
                                                <td>New Company Takeover Review</td>
                                                <td>Deveint Inc</td>
                                                <td class="hidden-phone">28</td>
                                                <td class="vertical-align-mid">
                                                    <button>View</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!-- end user projects -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                        <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                                            photo booth letterpress, commodo enim craft beer mlkshk </p>
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
    <script src="{{ asset('js/parsley.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('#demo-form').parsley().on('field:validated', function () {
                var ok = $('.parsley-error').length === 0;

            })
                .on('form:submit', function () {
                    alert('form complete');
                });
        });
    </script>
@stop