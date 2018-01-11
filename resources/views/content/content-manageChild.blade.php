<ul style="list-style:none;">
      
                                          
    @foreach($childs as $child)
     
        <li>
     
                    <input type="checkbox" name="checklist[{{ $child->id}}]" id="child_{{ $child->id}}" value="{{ $child->title }}"/>
                    <label for="{{ $child->id}}">{{ $child->title }}</label>
                
            @if(count($child->childs))
                @include('content.content-manageChild',['childs' => $child->childs])
            @endif
    
          
        </li>
       
    @endforeach
    
</ul>