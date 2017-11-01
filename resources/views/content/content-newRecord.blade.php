@extends('master\layout-profile')
@section('content')
<script src="js/jquery.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#birthday" ).datepicker({
            dateFormat: "yy-mm-dd",
            onSelect: function(value, ui) {
                var today = new Date(),
                    age = today.getFullYear() - ui.selectedYear;
                $('#birthday').attr('value',value);
                $('#age').attr('value',age);

            },
            maxDate: '+0d',
            changeMonth: true,
            changeYear: true,
            defaultDate: '-18yr'

        });
    } );
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
{{--
                        <label>Hobbies (2 minimum):</label>
                        <p style="padding: 5px;">
                            <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Skiing
                            <br />

                            <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
                            <br />

                            <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Eating
                            <br />

                            <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sleeping
                            <br />
                        <p>

                            <label for="heard">Heard us by *:</label>
                            <select id="heard" class="form-control" required>
                                <option value="">Choose..</option>
                                <option value="press">Press</option>
                                <option value="net">Internet</option>
                                <option value="mouth">Word of mouth</option>
                            </select>

                            <label for="message">Message (20 chars min, 100 max) :</label>
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                      data-parsley-validation-threshold="10"></textarea>

                            <br/>--}}
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" value="Submit" name="submit">

                    </form>
                    <!-- end form for validations -->

                </div>
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


<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.mCustomScrollbar.js"></script>
<script src="js/parsley.js"></script>

<script type="text/javascript">
    $(function () {
        $('#demo-form').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;

        })
            .on('form:submit', function() {
         alert('form complete');
            });
    });
</script>

@stop