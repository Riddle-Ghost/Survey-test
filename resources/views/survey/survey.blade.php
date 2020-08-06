@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Тесты</h1>

    <a href="{{ route('survey', $survey->id) }}">
        <p class="lead">{{ $survey->name }}</p>
    </a>
    @foreach ( $survey->questions as $question)
        
        <form action="{{ route('input') }}" method="post">
            @csrf
            <p class="lead">{{ $question->text }}</p>

            @foreach ( $question->answers as $answer)
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="answer" id="exampleRadios1" value="{{ $answer->id }}">
                        {{ $answer->text }}
                    </label>
                </div>
            @endforeach

            <button type="submit" class="btn btn-lg btn-block btn-outline-primary">Ответить</button>
        </form>

    @endforeach
    
</div>

@endsection