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
                        <form>

                            <div class="form-inline">
                                <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Complaint</label>
                                <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Diagnosis</label>
                                <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Treatment Given</label>
                                <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
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