@extends ('layouts.layout')

@section ('content')
    <div class="sixteen wide column"></div>
    <div class="ui container">
        <div class="ui grid padded centered">
            <h3>You can record your message here</h3>
        </div>
        <div style="height: 300px;">
            <div class="noteOverflow">
                <div class="ui grid padded centered">
                    @if ($notes)
                        @foreach($notes as $note)
                            <div class="sixteen wide column center aligned">
                                <p class="paragraphSize text-center" style="text-overflow: ellipsis;overflow: hidden;">{{ $note->note }}</p>
                            </div>
                            <div class="one wide column center aligned">
                                <a href="{{ url('/notes/' . $note->id)  }}">View</a>
                            </div>
                            <div class="one wide column center aligned">
                                <a class="edit" data-note-url="{{ url('/notes/' . $note->id) }}">Edit</a>
                            </div>
                            <div class="one wide column center aligned">
                                <form action="{{ url('/notes/' . $note->id) }}"  method="POST" >
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    {{ method_field('DELETE') }}
                                    <button class="rest" type="submit">Delete</button>
                                    {{--<a id="delete" href="{{ url('/notes/' . $note->id) }}">Delete</a>--}}
                                </form>
                            </div>
                            <div class="sixteen wide column center aligned">
                                <div style="border: 1px solid rgba(100, 100, 100, 0.5)"></div>
                            </div>
                        @endforeach
                    @else
                        <div class="sixteen wide column center aligned">
                            <p class="paragraphSize text-center" style="text-overflow: ellipsis;overflow: hidden;">Please enter a note....</p>
                        </div>
                        <div class="sixteen wide column center aligned">
                            <div style="border: 1px solid rgba(100, 100, 100, 0.5)"></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="sixteen wide column" style="text-align:center; margin-top:10px;"><a id="activator" class="text-change textChangeBtn" style="cursor:pointer; color: aliceblue;">Add Note</a></div>
@endsection