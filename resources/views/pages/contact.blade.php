@extends('master')

@section('content')
	<section>
		<header><h2>{{ $header }}</h2></header>
		<p>{{ $content }}</p>
		<footer>Data aktualizacji: {{ $date }}</footer>
	</section>
@endsection