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
	{!! Form::hidden('type', Input::get('type', 'post')) !!}
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
			{!! Form::textarea('body', null, ['class' => 'form-control summernote-editor']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('category_list', 'Categories:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-sm-9">
			{!! Form::select('category_list[]', $categories, null, ['multiple', 'data-placeholder' => 'Select category', 'data-tags' => 'true', 'class' => 'form-control categories']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('tag_list', 'Tags:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-sm-9">
			{!! Form::select('tag_list[]', $tags, null, ['multiple', 'data-placeholder' => 'Select tag', 'data-tags' => 'true', 'class' => 'form-control tags']) !!}
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

@section('style')
	<link rel="stylesheet" type="text/css" href="{!! asset('components/select2/select2.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('components/select2/select2-bootstrap.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('components/summernote/dist/summernote.css') !!}">	
	<link rel="stylesheet" type="text/css" href="{!! asset('components/summernote/dist/summernote-bs3.css') !!}">
@stop

@section('script')
	<script type="text/javascript" src="{!! asset('components/summernote/dist/summernote.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('components/select2/select2.min.js') !!}"></script>
	<script type="text/javascript">
		$(function () {
			function convertToSlug(Text)
			{
			    return Text
			        .toLowerCase()
			        .replace(/[^\w ]+/g,'')
			        .replace(/ +/g,'-')
			        ;
			}

			$('#title').on('keyup, blur', function (e) {
				$('#slug').val(convertToSlug($(this).val()));	
			});

			$('.tags, .categories').select2();
			$('#body').summernote({
				height: 300
			});
		});
	</script>
@stop