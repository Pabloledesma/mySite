@extends('layouts.app')

@section('content')


	<div class="row">
		<div class="col-md-6">
		<h1>All cards</h1>
			<ul class="list-group">
				@foreach($cards as $card)
				<li class="list-group-item"><a href="cards/{{ $card->id }}">{{ $card->title }}</a></li>
				@endforeach
			</ul>
		</div>
	</div>

@stop