@extends('layouts.app')

@section('page-title', $title )


@section('jumbo')
@include('partials._jumbotron')
@endsection

@section('main-content')
<section class="card-container">

    @foreach ($comics as $comic)

    <div class="comic-card">
        <img src="{{  $comic['thumb'] }}" alt="" class="card-img">
        <h4>{{$comic['series']}}</h4>
        <h6>{{$comic['price']}}</h6>
    </div>

    @endforeach

</section>
@endsection