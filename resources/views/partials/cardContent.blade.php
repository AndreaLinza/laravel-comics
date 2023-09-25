<section>
    <div class="container">
        <div class="row row-cols-lg-6 align-items-center">
            @foreach ($comics as $singleComic)
                <div class="col">
                    <div class="card">
                        <img src="{{ $singleComic['thumb'] }}" alt="...">
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
