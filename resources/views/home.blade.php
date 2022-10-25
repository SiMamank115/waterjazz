@extends('template')
@section('content')
<main class="" data-barba="container" data-barba-namespace="home">
	Web working properly
	<a data-barba-transition="right" href="/ticket" class="button-circle">ticket</a>
</main>
<script src="{{ asset("js/jquery.min.js") }}"></script>
    <script src="{{ asset("js/gsap.min.js") }}"></script>
    <script src="{{ asset("js/barba.min.js") }}"></script>
    <script src="{{ asset("js/app.js") }}" type="module"></script>
@endsection
@section('headers')
<link rel="stylesheet" href="{{ asset("css/app.css") }}">
@endsection