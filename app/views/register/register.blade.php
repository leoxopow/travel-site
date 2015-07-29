@layout('template.layout')
@if($errors->any())
    <ul style="color: red;">
        {{implode('',$errors->all('<li>:massage </li>'))}}
    </ul>
    @if (session::has('message'))
        <p>{{session::get('message')}}</p>
    @endif


    {{Form::open(['url'=>'register_action', 'files'=>true])}}
    <legend>Registration</legend>

    <div class="form-group">
        <p>Name:</p>
        <p>{{Form::text('mame')}}</p>
        <p>Login:</p>
        <p>{{Form::text('username')}}</p>

        <p>Avatar:</p>
        <p>{{Form::imagesx(),'avatar'}}</p>

        <p>Password</p>
        {{Form::text('password')}}

        <p>Confirm password</p>
        {{Form::text('cpassword')}}
        {{Form::submit('Submit')}}
    </div>

    </div>
    </main>
    @stop