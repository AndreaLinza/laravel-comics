@extends('layouts.public')

@section('title', 'American Vampire 1976')




@section('americanVampireContent')
    <section class="first-section">
        <div class="jumbo position-relative">

            <div class="container">
                <div class="thumbnail-container">
                    
                        <img class="thumbnail" src="{{ $comicsList[1]['thumb'] }}" alt="">
                    
                </div>
            </div>

        </div>
    </section>
    <div class="divider"></div>


    <section class="card-section">

        <div class="container">
            <div class="row">

                <div class="col-8">
                    <h3 class="">{{ $comicsList[1]['title'] }}</h3>
                    <h5>{{$comicsList[1]['description']}}</h5>

                </div>

                <div class="col-4">

                </div>
            </div>
        </div>
    </section>
@endsection

