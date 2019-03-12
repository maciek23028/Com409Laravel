@extends('layouts.mainPageLayout')

@section('content')
<div>
	<h1>All Movies</h1>

	
<ul>
	@foreach ($movies as $movie)
	<p><a href="{{route('showMovie',$movie->id)}}">{{$movie->title}}</a></p> <p>created: {{$movie->created_at}}<</a></p>
	@endforeach
	
</ul>
</div>
@stop
