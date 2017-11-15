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

                            <div>{{$data['created_at']}}</div>
                            <div>{{$data['complaint_summary']}}</div>
                            <div>{{$data['complaint_details']}}</div>
                            <div>{{$data['diagnosis_details']}}</div>
                            <div>{{$data['treatment_details']}}</div>





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