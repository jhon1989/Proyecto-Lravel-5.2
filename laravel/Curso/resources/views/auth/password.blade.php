@if(Session::has('message'))
     <div class='alert alert-success alert-dismissible' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
               <span aria-hidden='true'>&times;</span>
          </button>
          <strong>Success!! </strong>{{Session::get('message')}}
     </div>
 @endif

     <form method="POST" action="/password/email">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <button type="submit">
           Enviar solicitud
        </button>
    </div>
</form>
@stop