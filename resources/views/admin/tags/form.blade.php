@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-horizontal">
    @if (isset($model))
        {!! Form::model($model, ['files' => true, 'method' => 'PUT', 'route' => ['admin.tags.update', $model->id]]) !!}
    @else
        {!! Form::open(['files' => true, 'route' => 'admin.tags.store']) !!}
    @endif
    	<div class="form-group">
	    {!! Form::label('name', 'Name:', ['class' => 'col-md-2 control-label']) !!}
	    <div class="col-sm-9">
	        {!! Form::text('name', null, ['class' => 'form-control']) !!}
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('description', 'Description:', ['class' => 'col-md-2 control-label']) !!}
	    <div class="col-sm-9">
	        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
	    </div>
	</div>

    <div class="form-group">
        <label class="col-md-2 control-label"></label>
        <div class="col-sm-9">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>