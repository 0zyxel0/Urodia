@extends('master.layout-profile') @section('content')
<script src="{{ asset('js/jquery.js') }}"></script>
<style type="text/css">
    input[type=checkbox] {
        height: 20px;
        width: 20px;
    }
</style>
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