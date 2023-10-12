@extends('layouts.app')

@section('page-title', $title )

@section('main-content')
<section class="container">
    <h1 class="text-center">{{$title}}</h1>
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ $comic['title']}}</div>
                <div class="card-body">
                    <img src="{{  $comic['thumb'] }}" alt="" class="img-fluid">
                    <p class="card-text">
                        {{ $comic['description']}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection