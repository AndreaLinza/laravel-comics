<section>
    <div class="container">
        <div class="row row-cols-lg-6 row-cols-md-3 g-3">
            @foreach ($comicsList as $singleComic)
                <div class="col">
                    <div class="card">
                        <div class="img-container">
                            <img src="{{ $singleComic['thumb'] }}" alt="pic">
                            <a href="/{{$singleComic['id']}}" class="hover text-center text-white text-decoration-none">
                                <h5 class="pt-3 px-2"> {{$singleComic['series']}} </h5>
                                <p class="position-absolute start-50 bottom-0 translate-middle pb-3"> {{$singleComic['price']}} </p>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="card-text"> {{ $singleComic['title'] }} </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <button class="btn btn-primary rounded-0 text-uppercase" style="margin-left: 50%" type="button">Load More</button>
    </div>
</section>
