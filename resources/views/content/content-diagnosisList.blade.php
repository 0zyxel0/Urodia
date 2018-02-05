@extends('master.layout-profile') @section('content')
<script src="{{ asset('js/jquery.js') }}"></script>

<script src="{{asset('js/datatables.js')}}"></script>
<style type="text/css">
    input[type=checkbox] {
        height: 20px;
        width: 20px;
    }
    
    
    
</style>

<script type="text/javascript">
    
  $(function () {
      $("form").submit(function () {
 
    var this_master = $(this);

    this_master.find('input[type="checkbox"]').each( function () {
        var checkbox_this = $(this);


        if( checkbox_this.is(":checked") == true ) {
            checkbox_this.attr('value','1');
        } else {
            checkbox_this.prop('checked',true);
            //DONT' ITS JUST CHECK THE CHECKBOX TO SUBMIT FORM DATA    
            checkbox_this.attr('value','0');
        }
    })
})
    });
</script>>
<link href="{{asset('css/treeview.css')}}" rel="stylesheet">

<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-6">
            <div class="x_panel">
                <div class="x_title">
                        <h2>Diagnosis Checklist</h2>
                        <div class="clearfix"></div>
                    </div>
                <div class="x_content">
                        <form method="post" action="saveCategoryListData">
                    
                     @foreach($q as $a)
                     <input type="text" name="userpartyid" id="userpartyid" value="{{$a->partyid}}" style="display:none;" />
                        
                        @endforeach
                    <ul id="tree1" style="list-style:none;">
                       
                
                        @foreach($categories as $category)
                            <li>             
                           
                                           
                                                <input type="checkbox" name="checklist[{{ $category->id}}]" id="{{ $category->id }}">
                                                <label for="{{ $category->title }}"> {{ $category->title }}</label>
                                            
                             
                                @if(count($category->childs))
                                    @include('content.content-manageChild',['childs' => $category->childs])
                                @endif
                                
                            
                            </li>
                        @endforeach
                    </ul>
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                     <input type="text" name="createdBy" id="createdBy" value="{{Auth::user()->name}}" style="display:none;" />
                            <input type="submit" value="Submit" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>


   
      
        <script src="{{asset('js/treeview.js')}}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
        @stop