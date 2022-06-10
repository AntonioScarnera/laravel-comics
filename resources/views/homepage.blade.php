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

    <div class="referral-container">
        <div class="container referral">
            <ul>
                <li>
                    <img src="./images/buy-comics-digital-comics.png">
                    <span>DIGITAL COMICS</span>
                </li>
                <li>
                    <img src="./images/buy-comics-merchandise.png">
                    <span>DC MERCHANDISE</span>
                </li>
                <li>
                    <img src="./images/buy-comics-subscriptions.png">
                    <span>SUBSRCIPTIONS</span>
                </li>
                <li>
                    <img src="./images/buy-comics-shop-locator.png">
                    <span>COMIC SHOP LOCATOR</span>
                </li>
                <li>
                    <img src="./images/buy-dc-power-visa.svg">
                    <span>DC POWER VISA</span>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection