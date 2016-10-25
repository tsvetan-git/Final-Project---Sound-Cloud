@extends('app')
@section('title')
<h3>Search By Track Name</h3>
@endsection
@section('content')
    <div class="panel-body">
        {!! Form::open()!!}
        {!! Form::label('song', 'Name:') !!}
        {!! Form::text('song', '')!!}
        {!! Form::submit('Searching..', array('class'=>'btn-custom-xs')) !!}
        {!! Form::close() !!}
    </div>
    <ul>
        @foreach ($track as $track) 
         <ul>
            <p>{{ $track->track_name }}</p>
           <p>{{ $track->upload_at }}</p>
               <wavesurfer
                    data-wave-color="#666" data-progress-color="#f60"
                    data-url="<?=$track->track_path?>">
                </wavesurfer>
         </ul>
         <hr>
         @endforeach 
     </ul>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.1.2/wavesurfer.min.js"></script>
@endsection