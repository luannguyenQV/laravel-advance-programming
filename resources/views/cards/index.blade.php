@extends('layout')

@section('content')
	<h1>Our cards</h1>
	@foreach ($cards as $card)
		<p><a href='' target='_blank'>{{ $card->title }}</a></p>
	@endforeach
@stop