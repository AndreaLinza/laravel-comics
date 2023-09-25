@php
    $bannerLists = [
        [
            'id' => 'DigitalComics',
            'img' => '/images/buy-comics-digital-comics.png',
            'title' => 'digital comics',
        ],
        [
            'id' => 'DcMerchandise',
            'img' => '/images/buy-comics-merchandise.png',
            'title' => 'dc merchandise',
        ],
        [
            'id'=> 'Subscription',
            'img' => '/images/buy-comics-subscriptions.png',
            'title' => 'subscription',
        ],
        [
            'id' => 'ComicShopLocator',
            'img' => '/images/buy-comics-shop-locator.png',
            'title' => 'comic shop locator',
        ],
        [
            'id' => 'DcPowerVisa',
            'img' => '/images/buy-dc-power-visa.svg',
            'title' => 'dc power visa',
        ],
    ];
@endphp

<section class="blue-banner">

    <div class="container">
        <div class="banner-main z-1">

            @foreach ($bannerLists as $banner)
                <div>
                    <a class="d-flex align-items-center text-decoration-none" href="/{{$banner['id']}}">
                        <img src="{{ $banner['img'] }}" alt="">
                        <span>{{ $banner['title'] }}</span>
                    </a>
                </div>
            @endforeach
            
        </div>

    </div>
</section>
