@extends('master.layout-profile')
@section('content')
<script src="{{ asset('js/jquery.js') }}"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
        $("#birthday").datepicker({
            dateFormat: "yy-mm-dd",
            onSelect: function (value, ui) {
                var today = new Date(),
                    age = today.getFullYear() - ui.selectedYear;
                $('#birthday').attr('value', value);
                $('#age').attr('value', age);

            },
            maxDate: '+0d',
            changeMonth: true,
            changeYear: true,
            defaultDate: '-18yr'

        });
    });
</script>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Registration Form </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate action="store" method="post">
                        <label for="givenName">Given Name * :</label>
                        <input type="text" id="givenName" class="form-control" name="givenName" required />
                        <label for="familyName">Family Name * :</label>
                        <input type="text" id="familyName" class="form-control" name="familyName" required />
                        <label for="middleName">Middle Name * :</label>
                        <input type="text" id="middleName" class="form-control" name="middleName" required />
                        <label for="birthday">Date of Birth * :</label>
                        <input type="text" id="birthday" class="form-control" name="birthday" required />
                        <label for="age">Age * :</label>
                        <input type="text" id="age" class="form-control" name="age" required />
                        <label for="address">Address * :</label>
                        <input type="text" id="address" class="form-control" name="address" required />
                        <label for="email">Email * :</label>
                        <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                        <label for="obsIns">Obstetrics Index * :</label>
                        <input type="text" id="obsIns" class="form-control" name="obsIns" required />
                        <label for="menopause">Menopause :</label>
                        <input type="text" id="menopause" class="form-control" name="menopause" required />
                        <label>Gender *:</label>
                        <p>
                            M:
                            <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                            <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                        </p>

                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" value="Submit" name="submit">
                    </form>
                    <!-- end form for validations -->
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