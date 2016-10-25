@extends('app')
@section('title')
<h3>Upload</h3>
@endsection
@section('content')
	<div class="panel-body">
		<div class="about-section">
			<div class="text-content">
				<div class="span7 offset1">
				        @if(Session::has('success'))
				          <div class="alert-box success">
				          <h2>{!! Session::get('success') !!}</h2>
				          </div>
				        @endif
				        <div class="secure">Notice: allowed file types/extensions in the upload field is *.mp3</div>
				        <hr>
				        {!! Form::open(array('url'=>'apply/upload', 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true)) !!}
				        {!!Form::label('track', 'Track Name: ') !!}
				        {!! Form::text('name', '')!!}
				        <hr>
				         <div class="control-group">
					          <div class="controls">
					          {!! Form::file('file') !!}
								  <p class="errors">{!!$errors->first('file')!!}</p>
								@if(Session::has('error'))
								<p class="errors">{!! Session::get('error') !!}</p>
								@endif
					        </div>
				        </div>
				        <div id="success"> </div>
				      {!! Form::submit('Submit', array('class'=>'btn-custom-s')) !!}
				      {!! Form::close() !!}
				      </div>
				   	  </div>
					</div>
                </div>
@endsection