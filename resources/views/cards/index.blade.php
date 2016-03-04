@extends('layouts.app')

@section('content')

	<h1>All cards</h1>
	<ul>
		
		@foreach($cards as $card)

		<li>{{ $card->title }}</li>

		@endforeach
	</ul>

@stop