@php
    
        $headerList = [
            [
                'name' => 'Characters',
                'link' => '#',
            ],
            [
                'name' => 'Comics',
                'link' => '#',
            ],
            [
                'name' => 'Movies',
                'link' => '#',
            ],
            [
                'name' => 'Tv',
                'link' => '#',
            ],
            [
                'name' => 'Games',
                'link' => '#',
            ],
            [
                'name' => 'Collectibles',
                'link' => '#',
            ],
            [
                'name' => 'Video',
                'link' => '#',
            ],
            [
                'name' => 'Fans',
                'link' => '#',
            ],
            [
                'name' => 'News',
                'link' => '#',
            ],
            [
                'name' => 'Shop',
                'link' => '#',
            ],
        ]
@endphp


<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg">

            <div>
                <img src="/images/dc-logo.png" alt="DC">
            </div>

            <div class="collapse navbar-collapse d-flex justify-content-end">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        @foreach ($headerList as $item)
                            <a class="nav-link text-uppercase" href="#"> {{ $item['name'] }} </a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
