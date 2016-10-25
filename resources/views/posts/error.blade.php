@extends('app')

@section('title')
Edit Track Title
@endsection

@section('content')

<form action="/new-post" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<input required="required" value="{{ old('title') }}" placeholder="Enter title here" type="text" name = "title"class="form-control" />
	</div>
	<div class="form-group">
		<p hidden><textarea name='body'class="form-control">{{ old('body') }}</textarea></p>
	</div>
	<input type="submit" name='publish' class="btn-custom-xs" value = "Publish"/>
</form>
@endsection
