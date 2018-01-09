<ul style="list-style:none;">


        @foreach($childs as $child)

                <li>

                        <input type="checkbox" name="{{$child->title}}" id="child_{{ $child->title }}" value="{{ $child->title }}" />
                        <label for="{{ $child->title}}">{{ $child->title }}</label>

                        @if(count($child->childs))
                                @include('content.manageChild',['childs' => $child->childs])
                        @endif


                </li>

        @endforeach

</ul>