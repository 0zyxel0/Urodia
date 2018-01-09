<ul style="list-style:none;">
  @foreach($parentCats as $category)
        <li>
           	@if(count($category['Child_Category']))
           	  <div class="funkyradio">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="item_{{$category['cid']}}" id="item_{{$category['cid']}}" />
                        <label for="item_ {{$category['cid']}}"> {{$category['Child_Category']}}</label>
                    </div>
               </div>
            @endif
        </li>
    @endforeach
</ul>