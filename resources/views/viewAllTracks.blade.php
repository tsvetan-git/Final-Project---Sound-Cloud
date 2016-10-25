<?php
use Illuminate\Foundation\Auth\User;
?>
@extends('app')
@section('title')
<h3>Storage</h3>
@endsection
@section('content')
            <div class="panel panel-default">                              
                @foreach ($track as $track)               
                <div class="panel-heading"><h4>{{ $track->track_name }}</h4></div> 
                    <wavesurfer
                    data-wave-color="#428bca" data-progress-color="#666"
                    data-url="<?=$track->track_path?>">
                    </wavesurfer>
                    <br>
                   <form action="/new-post" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<input required="required" value="{{ $track->track_name }}" placeholder="Enter title here" type="text" name = "title"class="form-control" />
						</div>
						<div class="form-group">
							<p hidden>
							<textarea name='body'class="form-control">
								<wavesurfer
			                    data-wave-color="#666" data-progress-color="#f60"
			                    data-url="<?=$track->track_path?>">
			                    </wavesurfer>
		                    </textarea>
		                    </p>
						</div>
						<input type="submit" name='publish' class="btn-custom-xs" value = "Publish"/>
						
					</form>
					<form action="" method="get" name="playlist">
					<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
					<input type="hidden" name="user_id" value="{{ $track->track_id }}">
					<input type="hidden" name="user_id" value="{{ $track->track_name }}">
					<input type="hidden" name="user_id" value="{{ $track->track_path }}">
					<input type="submit" name='playlist' class="btn-custom-xs" value = "Add To Playlist"/>				
 					</form>
 					<?php 
					if(isset($_GET['playlist']))
					{
						$db= DB::insert('insert into playlist (user_id,track_id,track_name,track_path) values(?,?,?,?)',
						[Auth::user()->id,$track->track_id,$track->track_name,$track->track_path]);	
						}						
					?>
					<br>
                @endforeach 
            </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.1.2/wavesurfer.min.js"></script>
@endsection