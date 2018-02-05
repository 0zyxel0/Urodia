@extends('master.layout-profile')
@section('content')
<script src="{{ asset('js/jquery.js') }}"></script>
<!-- page content -->
<div class="right_col" role="main">
   <div class="">
      <div class="page-title">
         <div class="title_left">
            <h3>Diagnosis Findings List</h3>
            
         </div>
      </div>
      <div class="page-content">
          <table width="100%" class="table table-striped table-bordered table-hover no-footer dtr-inline" id="dataTables" role="grid" aria-describedby="dataTables-example_info">
               <thead>
                  <tr>
                     <th>Ailment</th>
                     <th>Status</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($data as $d)
                  <tr>
                     <td>  {{$d['title']}}</td>
                     <td>  {{$d['ischeck']}}</td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
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