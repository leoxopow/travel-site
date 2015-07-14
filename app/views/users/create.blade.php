@layout('template.layout')

@section('content')
    <main>
        <div class="container">
            {{Form::open(['url'=>'user/registration', 'files'=>true])}}
            <legend>Registration</legend>

            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control" name="" id="" placeholder="Input...">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            {{Form::close()}}
        </div>
    </main>
@stop