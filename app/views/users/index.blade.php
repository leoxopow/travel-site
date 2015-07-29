@layout('template.layout')

@section('content')
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="jumbtron">
                {{Form::open()}}
                <div class="form-group">
                    <input type="text" name="username" id="" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control">
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
@stop