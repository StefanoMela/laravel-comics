@extends('layouts.app')

@section('page-title', $title )

@section('main-content')
<div class="card-container">

    @foreach ($comics as $comic)

    <div class="comic-card">
        <img src="{{  $comic['thumb'] }}" alt="" class="card-img">
        <h6 class="card-title">{{$comic['series']}}</h6>
    </div>

    @endforeach

</div>
@endsection