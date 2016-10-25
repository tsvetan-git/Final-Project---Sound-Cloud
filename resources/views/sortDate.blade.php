@extends('app')
@section('title')
<h3>Sort All Uploads By Date</h3>
@endsection
@section('content')
	<div class="panel-body"></div>
	@foreach ($track as $track) 
    <p>Name: {{ $track->track_name }}</p>
    <p>Upload at: {{$track->upload_at}}</p>
	     <wavesurfer 
	     	data-wave-color="#666" data-progress-color="#f60"
	        data-url="<?=$track->track_path?>">
	     </wavesurfer>
     <hr>
     @endforeach 
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.1.2/wavesurfer.min.js"></script>
@endsection