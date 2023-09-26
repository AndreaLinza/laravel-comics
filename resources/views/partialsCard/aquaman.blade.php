@extends('layouts.public')

@section('title', 'Aquaman')




@section('aquamanContent')
    <section class="first-section">
        <div class="jumbo position-relative">

            <div class="container">
                <div class="thumbnail-container">
                    
                        <img class="thumbnail" src="{{ $comicsList[2]['thumb'] }}" alt="">
                    
                </div>
            </div>

        </div>
    </section>
    <div class="divider"></div>


    <section class="card-section">

        <div class="container">
            <div class="row">

                <div class="col-8">
                    <h3 class="">{{ $comicsList[2]['title'] }}</h3>
                    <h5>{{$comicsList[2]['description']}}</h5>

                </div>

                <div class="col-4">

                </div>
            </div>
        </div>
    </section>
@endsection


