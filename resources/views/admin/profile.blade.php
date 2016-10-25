@extends('app')

@section('title')
{{ $user->name }}
<h4>Joined on {{$user->created_at->format('M d,Y \a\t h:i a') }}</h4>
@endsection

@section('content')
<div>
<div id="counter"> 
	<span class="counter circle" style="display: inline-block;">
	<?php 
	$currentId =Auth::user()->id;
	$q = DB::select(("SELECT track_id FROM track WHERE user_id =:id"),array('id'=>$currentId));
	echo count($q);
	?>
	</span>
	<p><h4>uploads</h4></p>
</div>
<div id="counter"> 	 
	<span class="counter circle" style="display: inline-block;">{{$posts_count}}</span>
	<p><h4>posts</h4></p>
</div>
<div id="counter"> 		 
	<span class="counter circle" style="display: inline-block;">{{$comments_count}}</span>
	<p><h4>comments</h4></p> 
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

</div>

<div class="panel panel-default">
	<div class="panel-heading"><h3>Latest Posts</h3></div>
	<div class="panel-body">
		@if(!empty($latest_posts[0]))
		@foreach($latest_posts as $latest_post)
			<p>
				<strong><a href="{{ url('/'.$latest_post->slug) }}">{{ $latest_post->title }}</a></strong>
				<span class="well-sm">On {{ $latest_post->created_at->format('M d,Y \a\t h:i a') }}</span>
			</p>
		@endforeach
		<tr>
			@if($author && $posts_count)
			<td><a href="{{ url('/my-all-posts')}}">Show All</a></td>
			@endif
		</tr>
		@else
		<p>You have not written any post till now.</p>
		@endif
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading"><h3>Latest Comments</h3></div>
	<div class="list-group">
		@if(!empty($latest_comments[0]))
		@foreach($latest_comments as $latest_comment)
			<div class="list-group-item">
				<p>{{ $latest_comment->body }}</p>
				<p>On {{ $latest_comment->created_at->format('M d,Y \a\t h:i a') }}</p>
				<p>On post <a href="{{ url('/'.$latest_comment->post->slug) }}">{{ $latest_comment->post->title }}</a></p>
			</div>
		@endforeach
		@else
		<div class="list-group-item">
			<p>You have not commented till now. Your latest 5 comments will be displayed here</p>
		</div>
		@endif
	</div>
</div>
@endsection
