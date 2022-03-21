
@csrf
<textarea
class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
  bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
  ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
name="body"
placeholder="Type your commnet here..."
value="{{$comment->body ??  old('body')}}"
></textarea>
@if ($errors->get('body'))
    @foreach ( $errors->get('body') as $message )
        <p>{{$message}}</p>
    @endforeach
@endif
<input type="checkbox" name="visible" value="{{ $user->visible ??  old('visible')}}"/>
@if ($errors->get('visible'))
    @foreach ( $errors->get('visible') as $message )
        <p>{{$message}}</p>
    @endforeach
@endif
<button type="submit">Submit</button>
