@extends('master.layout-profile')
@section('content')
<script src="{{ asset('js/jquery.js') }}"></script>
<!-- page content -->




<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Diagnosis Findings List</h3>
<div class="row">
                <table width="200px" class="table table-striped table-bordered table-hover no-footer dtr-inline"  role="grid" aria-describedby="dataTables-example_info" style="width: 20%; float: left;">
    <thead>

    </thead>
    <tbody>


    <tr>

        @foreach($result as $key => $value1)
            <tr>
                <td> {{$key}}</td>

            </tr>
        @endforeach
        </tr>



    </tbody>



                </table>

                <table class="table table-striped table-bordered table-hover no-footer dtr-inline"  role="grid" aria-describedby="dataTables-example_info" style="width: 20%; float: left;">
                    <tbody>
                    <tr>
    @foreach($result as $value)
        <tr>
        <td>
            {{$value}}
        </td></tr>
        @endforeach
                    </tr>
                    </tbody>
                </table>
</div>


            </div>
        </div>
    </div>
</div>
<!-- /page content -->

      </div>
    </div>
  </body>


<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
  @stop