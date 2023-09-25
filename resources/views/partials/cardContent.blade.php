<section>
    <div class="container">
        <div class="row row-cols-lg-6 align-items-center">
            @foreach ($comics as $singleComic)
                <div class="col">
                    <div class="card">
                        <img src="{{ $singleComic['thumb'] }}" alt="...">
                        <div class="card-body">
                            <p class="card-text"> {{$singleComic['title']}} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
