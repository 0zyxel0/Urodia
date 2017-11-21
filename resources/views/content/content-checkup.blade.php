@extends('master.layout-profile')
@section('content')


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
                        @foreach($data as $data)



                                <div class="container">
                                    <div style="float: left; width:50%;">
                                        <a class="btn btn-success" href="/urodia/public/newDiagnosis/{{$data['partyid']}}"><i class="fa fa-edit m-right-xs"></i>Diagnosis Checklist</a>
                                    </div>
                                    <div style="float: right; width:50%; text-align: right;" >
                                        <input type="date"  id="example-date-input" disabled>
                                    </div>
                                </div>
<br/>




                            <form action="/urodia/public/storeCheckup" method="post">



                            <div class="form-group">

                                    <input class="form-control" type="text" value="{{$data["partyid"]}}" id="partyid" name="partyid" style="display: none;">

                                @endforeach
                                <label for="exampleTextarea">Complaint Summary</label>
                                <textarea class="form-control" id="complaint_summary" name="complaint_summary" rows="1"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Complaint Details</label>
                                <textarea class="form-control" id="complaint_details"  name="complaint_details" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Diagnosis</label>
                                <textarea class="form-control" id="diagnosis_details" name="diagnosis_details" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Treatment Given</label>
                                <textarea class="form-control" id="treatment_gvn" name="treatment_gvn" rows="4"></textarea>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" value="Submit" name="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>

@stop