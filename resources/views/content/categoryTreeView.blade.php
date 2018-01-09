@extends('master.layout-profile')
@section('content')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style type="text/css">
        input[type=checkbox] {
            height: 20px;
            width: 20px;
        }

    </style>
    <link href="{{asset('css/treeview.css')}}" rel="stylesheet">


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>List View</h3>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <ul id="tree1" style="list-style:none;">
                                            @foreach($categories as $category)
                                                <li>


                                                    <input type="checkbox" name="{{ $category->title }}" id="{{ $category->title }}" value="{{ $category->id }}" />
                                                    <label for="{{ $category->title }}"> {{ $category->title }}</label>


                                                    @if(count($category->childs))
                                                        @include('content.manageChild',['childs' => $category->childs])
                                                    @endif


                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <form action="/urodia/public/addCategory" method="post">
                                            <div class="form-group">
                                                <label for="parentCat">Parent Category</label>
                                                <select class="form-control" id="parentCat" name="parentCat">
                                                    <div class="funkyradio">

                                                        <option value="Parent Category" selected="selected" disabled >Parent Category</option>
                                                        <option value="New Category" >New Category</option>
                                                        @foreach($categories as $c)
                                                            <option value="{{$c['id']}}">{{$c['title']}}</option>
                                                        @endforeach
                                                    </div>
                                                </select>
                                            </div>
                                            <div class="form-group">

                                                <label for="catName">Child Category Name</label>
                                                <input type="text" class="form-control" id="catName" name="catName"/>
                                            </div>
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="submit" value="Submit" name="submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <script src="{{asset('js/treeview.js')}}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
@stop