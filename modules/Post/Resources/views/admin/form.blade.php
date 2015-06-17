<div class="row">
		<div class="col-md-8">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Post Contents</h3>
					<div class="box-tools pull-right"></div>
				</div>
				<div class="box-body">
					<div class="form-group">
						{!! Form::label('title', 'Title:') !!}	
						{!! Form::text('title', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('slug', 'URI Slug:') !!}	
						{!! Form::text('slug', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('body', 'Contents:') !!}	
						{!! Form::textarea('body', null, ['id' => 'editor', 'class' => 'form-control']) !!}
					</div>
				</div>
			</div>			
		</div>
		<div class="col-md-4">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Featured Image</h3>
					<div class="box-tools pull-right"></div>
				</div>
				<div class="box-body">
					<div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-new thumbnail" style="width: 325px; height: 225px;">
					  </div>
					  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 350px; max-height: 350px;">
					  	@if (isset($post))
						  	@if ($post->hasImage())
						  		<img src="{{ $post->iamge_url }}" alt="{{ $post->title }}">
						  	@endif
					  	@endif
					  </div>
					  <div>
					    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
						{!! Form::file('image') !!}
					    </span>
					    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
					  </div>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Publishing</h3>
					<div class="box-tools pull-right"></div>
				</div>
				<div class="box-body">
					<div class="checkbox">
						<label>
							{!! Form::checkbox('save_as_draft', 1) !!}
							Save as draft
						</label>
					</div>
				</div>
				<div class="box-footer">
					<button class="btn btn-primary btn-block" type="submit">
						Publish
					</button>
				</div>
			</div>
		</div>
	</div>