@extends('app')
@section('title')
{{$title}}
@endsection
@section('slider')
<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
             <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/c_img_01.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Find the music you love. Discover new tracks.</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/c_img_04.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Upload Your Audio Remixes. Publish Online Easely.</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/c_img_02.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Store Your Favarote Remixes. Search For New Vibes.</h2>
                </div>
            </div>
             <div class="item">
                <div class="fill" style="background-image:url('images/c_img_03.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Store Your Favarote Remixes. Search For New Vibes.</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- Header Carousel -->
@endsection

@section('counter')
<div id="counter"> 
	<span class="counter circle" style="display: inline-block;">
	<?php $q = DB::select('select id from users'); echo (count($q))?>
	</span>
	<p><h4>users</h4></p>
</div>
<div id="counter"> 	 
	<span class="counter circle" style="display: inline-block;">
	<?php $q = DB::select('select track_id from track '); echo (count($q))?>
	</span>
	<p><h4>uploads</h4></p>
</div>
<div id="counter"> 		 
	<span class="counter circle" style="display: inline-block;">
	<?php $q = DB::select('select id from posts'); echo (count($q))?>
	</span>
	<p><h4>posts</h4></p> 
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> 
<script src="js/jquery.counterup.min.js"></script> 
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 50,
            time: 1000
        });
    });
</script>
@endsection

@section('content')
@if ( !$posts->count() )
There is no uploads till now.
@else
<div class="">

	@foreach( $posts as $post )
	
    @if ($post->isLiked)
        <a href="{{ route('post.like', $post->id) }}"></a>
    @else
        <a href="{{ route('post.like', $post->id) }}">Like 
        <?php $value = DB::select(DB::raw("
				SELECT user_id 
				FROM `likeables` 
				WHERE deleted_at IS NULL 
				AND likeable_id=:id
				"),array("id"=>$post->id));
    			$count = count($value); echo $count;
    	?>
    	</a> 	
    @endif	
	<div class="list-group">
		<div class="list-group-item">
			<h3><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a>
				@if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
					@if($post->active == '1')
					<button class="btn" style="float: right"><a href="{{ url('edit/'.$post->slug)}}">Delete</a></button>
					@else
					<button class="btn" style="float: right"><a href="{{ url('edit/'.$post->slug)}}">Edit Draft</a></button>
					@endif
				@endif
			</h3>
			<p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a></p>
			
		</div>
		<div class="list-group-item">
			<article>
				{!! str_limit($post->body, $limit = 1500, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>') !!}
			</article>
		</div>
	</div>
	@endforeach
	{!! $posts->render() !!}
</div>
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.1.2/wavesurfer.min.js"></script>
@endsection
