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
                    <h3>View List</h3>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                      <form method="post" action="show">
                      <div class="funkyradio">
                        <ul>
                           @foreach($parentCats as $category)
	
				                <li>
			                   <div class="funkyradio">
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="item_{{ $category['pid']}}" id="item_{{ $category['pid']}}" />
                                        <label for="item_{{ $category['pid']}}"> {{ $category['Parent_Category']}}</label>
                                    </div>
                        
                               </div>
                               </li>
				            @endforeach
                        </ul>
                        </div>
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                          <input type="submit"/>
                      </form>

                    <form method="post" action="show">
                        @foreach($parentsCats as $p)
                                     	@if(count($p['Child_Category']))
                                              @include('content.content-manageChild')
                                        @endif
                        @endforeach
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                          <input type="submit"/>
                    </form>    
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