@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2>{{ $card->title }}</h2>
			
			<ul class="list-group">
				@foreach( $card->notes as $note )
				<li class="list-group-item">
					{{ $note->body }}
					<a href="#" class="pull-right">{{ $note->user->name }}</a>
				</li>
				@endforeach
			</ul>

			<hr>
			<h3>Add a New Note</h3>
			<form method="POST" action="/cards/{{$card->id}}/notes">
				{{ csrf_field() }}
				<div class="form-group">
					<textarea name="body" class="form-control">{{ old('body') }}</textarea>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Add Note</button>
				</div>
			</form>
			@if( count($errors) )
				<ul class="error">
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif
		</div>
	</div>

	
@stop