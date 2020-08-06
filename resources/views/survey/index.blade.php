@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Тесты</h1>

    @foreach ( $surveys as $survey)
    <a href="{{ route('survey', $survey->id) }}">
        <p class="lead">{{ $survey->name }}</p>
    </a>
    @endforeach
    
</div>

@endsection