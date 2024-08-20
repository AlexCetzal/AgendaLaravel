@extends('layouts.landing')

@section('title', 'Home')

@section('content')
@include('_components.slider')

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/js/slider.js') }}"></script>
<h1>Index1</h1>

@endsection