@extends('master.layout-profile')
@section('content')



    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/datatables.js')}}"></script>


    <script>
        $(document).ready(function() {
            var table =  $('#dataTables').DataTable({

            });
        } );



    </script>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Checklist Category</h3>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form action="/urodia/public/saveCat" method="post">
                            <div class="form-group">

                                <label for="catName">Category Name</label>
                                <input type="text" class="form-control" id="catName" name="catName"/>
                            </div>
                            <div class="form-group">
                                <label for="catGroup">Category Order Group</label>
                                <input class="form-control" id="catGroup"  name="catGroup" />
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" value="Submit" name="submit">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <h3>Checklist categories</h3>
                        <hr/>

                        <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                <thead>
                                <tr>

                                    <th>Category ID</th>
                                    <th>Category Name</th>
                                    <th>Category Order</th>
                                    <th>Category Order</th>
                                    <th>Create At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $d)
                                   <tr>
                                       <td>{{$d['categoryid']}}</td>
                                       <td>{{$d['categoryname']}}</td>
                                       <td>{{$d['categoryOrder']}}</td>
                                       <td>{{$d['created_at']}}</td>
                                       <td>{{$d['updated_at']}}</td>
                                   </tr>

                                @endforeach
                                </tbody>
                            </table>
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