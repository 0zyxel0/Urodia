@extends('master.layout-profile')
@section('content')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{asset('js/datatables.js')}}"></script>
<style type="text/css">
    input[type=checkbox] {
	height: 20px;
	width: 20px;
    }
	
	.tree, .tree ul {
    margin:0;
    padding:0;
    list-style:none
}
.tree ul {
    margin-left:1em;
    position:relative
}
.tree ul ul {
    margin-left:.5em
}
.tree ul:before {
    content:"";
    display:block;
    width:0;
    position:absolute;
    top:0;
    bottom:0;
    left:0;
    border-left:1px solid
}
.tree li {
    margin:0;
    padding:0 1em;
    line-height:2em;
    color:#369;
    font-weight:700;
    position:relative
}
.tree ul li:before {
    content:"";
    display:block;
    width:10px;
    height:0;
    border-top:1px solid;
    margin-top:-1px;
    position:absolute;
    top:1em;
    left:0
}
.tree ul li:last-child:before {
    background:#fff;
    height:auto;
    top:1em;
    bottom:0
}
.indicator {
    margin-right:5px;
}
.tree li a {
    text-decoration: none;
    color:#369;
}
.tree li button, .tree li button:active, .tree li button:focus {
    text-decoration: none;
    color:#369;
    border:none;
    background:transparent;
    margin:0px 0px 0px 0px;
    padding:0px 0px 0px 0px;
    outline: 0;
}
    
  
</style>


 <div class="right_col" role="main">
         
        
<div class="row">
     <div class="col-md-6">
             <div class="x_panel">
                    <div class="x_content">
                    <h3>Add New Category</h3>
                         <form action="/urodia/public/addCategory" method="post">
                            <div class="form-group">
                            <label for="parentCat">Parent Category</label>
                            <select class="form-control" id="parentCat" name="parentCat">
                                 <div class="funkyradio">
                               
                                <option value="Parent Category" selected="selected" disabled >Parent Category</option>
                                <option value="New Category" >New Category</option>
                                @foreach($allCategories as $c)
                                <option value="{{$c['id']}}">{{$c['title']}}</option>
                                @endforeach
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
    
    
          <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-6">
                <div class="x_panel">
                    <div class="x_content">
                    
                    <ul id="tree1" style="list-style:none;">
                        
                        @foreach($categories as $category)
                                   
                            <li>             
                           
                                           
                                      <input type="checkbox" name="{{ $category->title }}" id="{{ $category->title }}" />
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
<script src="{{ asset('js/treeview.js')}}"></script>
   <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
@stop
