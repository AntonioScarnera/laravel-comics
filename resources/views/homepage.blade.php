@extends('layouts.base')



@section('pageTitle')
    Laravel Comics - Home
@endsection

@section('mainContent')

<section class="jumbotron container">
    <img src="./images/jumbotron.jpg">
</section>

<section class="mainContent">

    <div class="banner-name container">
        <span class="banner">
            CURRENT SERIES
        </span>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($comics as $item)
                <div class="col">
                    <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                    <h2>{{$item['series']}}</h2>
                </div>
            @endforeach
        </div>
    </div>
    <div class="more-btn">

        <span class="btn">Load More</span>
    </div>
</section>
@endsection