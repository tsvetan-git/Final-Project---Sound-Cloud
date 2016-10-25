<?php
use Illuminate\Foundation\Auth\User;
?>
@extends('app')
@section('title')
<h3>Playlist</h3>
@endsection

@section('content')
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/ribbon.css" />
<script src="js/wavesurfer.min.js"></script>
<script src="js/app.js"></script>

	<div class="row" style="margin: 30px 0">
    	<div class="col-sm-10">
    		<div id="waveform"></div>
    	</div>
    		<div class="col-sm-2">
    			<button class="btn btn-primary btn-block" id="playPause">
                    <span id="play">
                    <i class="glyphicon glyphicon-play"></i>Play</span>
					<span id="pause" style="display: none">
					<i class="glyphicon glyphicon-pause"></i>Pause</span>
                 </button>
             </div>
    </div>
    <div class="list-group" id="playlist">
@foreach ($track as $track)
@if(!Auth::guest() && ($track->user_id == Auth::user()->id))
     		<a href="{{ $track->track_path }}" class="list-group-item">
     			<i class="glyphicon glyphicon-play"></i>
     			{{ $track->track_name }}
     			<span class="badge"></span>
            </a>
@endif
@endforeach
    </div>
@endsection