@if ($errors->get('email'))
    @foreach ( $errors->get('email') as $message )
        <p>{{$message}}</p>
    @endforeach
@endif
