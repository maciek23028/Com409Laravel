@extends('layouts.mainPageLayout')

@section('content')

	<div><li><a href="{{route('showMovie',$movie->id)}}">
		Title: {{$movie->title }}<br />
		<br /></a>

	</li>
<p>Description: {{$movie->description}}</p>>
</div>	


@stop