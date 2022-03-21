

@section('commentSection')
    <form action="{{ route('comment.getListComment', $user->id) }}" method="get">
        <input type="text" name="search" placeholder="Search">
        <button>Search comment</button>
    </form>


    @foreach ($comments as $comm)
        <li>
            {{ $comm->body }} - {{ $comm->visible }}
            <button><a href="{{ route('comment.editPage', ['id' => $comm->id]) }}"> Edit </a> </button>
        </li>
    @endforeach
    <a href="{{ route('comment.createPage') }}"> + comment</a>
@endsection
