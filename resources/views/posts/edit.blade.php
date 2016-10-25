@extends('app')

@section('title')
Cloud in movement...
@endsection

@section('content')

<div id="counter"> 
	<span class="counter circle" style="display: inline-block;">
	<?php 
	$currentId =Auth::user()->id;
	$q = DB::select(("SELECT id FROM posts WHERE author_id =:id"),array('id'=>$currentId));
	echo count($q);
	?>
	</span>
	<p><h4>posts</h4></p>
</div>
<div style="width:190px; display:inline-block;">
<h4>go to cloud home</h4>
<a style="width:190px; "href="{{  url('/')}}" class="btn btn-custom">cloud</a>
</div>
<div style="width:190px; display:inline-block;">
<h4>back to storage</h4>
<a style="width:190px;" href="{{  url('/mytracks') }}" class="btn btn-primary">storage</a>
</div>
<div style="width:190px; display:inline-block; background-color:white;color:white;">
<form method="post" action='{{ url("/update") }}'>
<h4>delete this post?</h4>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="post_id" value="{{ $post->id }}{{ old('post_id') }}">
	<div class="form-group">
		<input required="required" placeholder="Enter title here" type="text" name = "title" class="form-control" value="@if(!old('title')){{$post->title}}@endif{{ old('title') }}"/>
	</div>
	<div class="form-group">
		<p hidden><textarea name='body'class="form-control">
			@if(!old('body'))
			{!! $post->body !!}
			@endif
			{!! old('body') !!}
		</textarea></p>
	</div>
	@if($post->active == '1')
	<!--<input type="submit" name='publish' class="btn btn-success" value = "Update"/>-->
	@else
	<input type="submit" name='publish' class="btn-custom-s" value = "Publish"/>
	@endif
	<a style="width:190px;" href="{{  url('delete/'.$post->id.'?_token='.csrf_token()) }}" class="btn btn-danger">Delete</a>
</form>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> 
<script type="text/javascript" src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 500
        });
    });
</script>

@endsection
