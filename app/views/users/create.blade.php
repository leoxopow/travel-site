@layout('template.layout')

@section('content')
    <main>
        <div class="container">
            @if($errors->any())
                <ul style="color: red;">
                    {{implode('',$errors->all('<li>:massage </li>'))}}
                </ul>
            @endif



            {{Form::open(['url'=>'register_action', 'files'=>true])}}
            <legend>Registration</legend>

            <div class="form-group">
                <p>Name:</p>
                <p>{{Form::text('mame')}}</p>

                <p>Login:</p>
                <p>{{Form::text('username')}}</p>
                <p>Email:</p>
                <p>{{Form::text('email')}}</p>

                <p>Password</p>
                {{Form::text('password')}}

                <p>Confirm password</p>
                {{Form::text('cpassword')}}
                {{Form::submit('Submit')}}
                {{Form::close()}}
            </div>

        </div>
    </main>
@stop