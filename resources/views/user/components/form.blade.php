@csrf
<input type="text" name="name" placeholder="Nome" value="{{$user->name ??  old('name')}}"/>
@if ($errors->get('name'))
    @foreach ( $errors->get('name') as $message )
        <p>{{$message}}</p>
    @endforeach

@endif
<input type="text" name="email" placeholder="email" value="{{ $user->email ??  old('email')}}"/>
@if ($errors->get('email'))
    @foreach ( $errors->get('email') as $message )
        <p>{{$message}}</p>
    @endforeach

@endif
<input type="password" name="password" placeholder="password"/>
@if ($errors->get('password'))
    @foreach ( $errors->get('password') as $message )
        <p>{{$message}}</p>
    @endforeach

@endif
<button type="submit">Submit</button>
