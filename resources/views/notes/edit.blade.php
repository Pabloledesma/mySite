@extends('layouts.app')
@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2>Edit Note</h2>
			<hr>
			<form method="POST" action="/notes/{{$note->id}}">

				{{ method_field('PATCH') }}

				<div class="form-group">
					<textarea name="body" class="form-control">{{ $note->body }}</textarea>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Update Note</button>
				</div>
			</form>
		</div>
	</div>

@stop