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
	{!! Form::model($model, ['files' => true, 'method' => 'PUT', 'route' => ['admin.posts.update', $model->id]]) !!}
	@else
	{!! Form::open(['files' => true, 'route' => 'admin.posts.store']) !!}
	@endif
	<div class="form-group">
		{!! Form::label('title', 'Title:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-sm-9">
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('slug', 'Slug:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-sm-9">
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon2">{!! url() !!}/</span>
				{!! Form::text('slug', null, ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('body', 'Body:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-sm-9">
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
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