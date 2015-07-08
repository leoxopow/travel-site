@layout('template.layout')

@section('content')
    {{Form::open(['url'=>'/posts', 'method'=>'post'])}}
    	<legend>Form Title</legend>

    	<div class="form-group">
    		<label for=""></label>
    		<input type="text" class="form-control" name="" id="" placeholder="Input...">
    	</div>



    	<button type="submit" class="btn btn-primary">Submit</button>
    {{Form::close()}}
@stop