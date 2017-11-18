@extends('master.layout-profile')
@section('content')


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Check up Record</h3>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        @foreach($data as $data)




                            <div class="form-inline">
                                <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="{{$data['created_at']}}" id="example-date-input" disabled>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="exampleTextarea">Complaint Summary</label>
                                <textarea class="form-control" id="complaint_summary" name="complaint_summary" rows="4" disabled>{{$data['complaint_summary']}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Complaint Details</label>
                                <textarea class="form-control" id="complaint_details"  name="complaint_details" rows="4" disabled>{{$data['complaint_details']}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Diagnosis</label>
                                <textarea class="form-control" id="diagnosis_details" name="diagnosis_details" rows="4" disabled>{{$data['diagnosis_details']}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Treatment Given</label>
                                <textarea class="form-control" id="treatment_gvn" name="treatment_gvn" rows="4" disabled>{{$data['treatment_details']}}</textarea>
                            </div>

                            <input type="submit" value="Save" name="submit">
                            @endforeach
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