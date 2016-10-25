@extends('app')
@section('title')
<h3>Search By User Name</h3>
@endsection
@section('content')
    <div class="panel-body">
        {!! Form::open()!!}
        {!!Form::label('user', 'Name:') !!}
        {!! Form::text('user', '')!!}
        {!! Form::submit('Searching..', array('class'=>'btn-custom-xs')) !!}
        {!! Form::close() !!}
     </div>
     <ul>
     
        @foreach ($users as $user) 
        
        <a href="{{ url('viewProfile/'.$user->name)}}">{{ $user->name }}</a>
            
             <hr>
         @endforeach 
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.1.2/wavesurfer.min.js"></script>
@endsection