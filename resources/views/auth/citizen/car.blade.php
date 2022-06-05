@extends('layouts.app')

@section('title', 'Car')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-f521">
        @if (count($car))
            <div class="u-clearfix u-sheet u-sheet-1">
                <img alt="" class="u-border-1 u-border-palette-5-dark-3 u-image u-image-default u-image-1"
                    data-image-width="1156" data-image-height="770" src="{{ asset('images/Circle-icons-car.png') }}">
                <h6 class="u-align-center u-text u-text-default u-text-palette-1-base u-text-1">{{ $car[0]->name }}</h6>
                <span class="u-file-icon u-icon u-icon-1"><img src="{{ asset('images/783886.png') }}" alt=""></span>
                <p class="u-text u-text-2"><b>Citizen SSN:</b>
                </p>
                <p class="u-text u-text-default u-text-3">{{ auth('citizen')->user()->id }}</p><span
                    class="u-file-icon u-icon u-icon-2"><img src="{{ asset('images/67994.png') }}" alt=""></span>
                <p class="u-large-text u-text u-text-default u-text-variant u-text-4"><b><u>Car Details&nbsp;</u></b>
                </p>
                <p class="u-text u-text-default u-text-5"><b>Model:<br>
                        <br>Color:<br>
                        <br>Motor Number:<br>
                        <br>Chasette Number:<br>
                        <br>Motor Capacity:<br>
                        <br></b>
                    <br>
                </p>
                <p class="u-text u-text-default u-text-6"><b> Cylinder Number:<br>
                        <br>Fuel Tank capacity:<br>
                        <br>Mechanical horse :<br>
                        <br>Number of seats :<br>
                        <br>Transmission type:</b>
                </p>
                <p class="u-text u-text-7">{{ $car[0]->cylinder_number }}</p>
                <p class="u-text u-text-default u-text-8">{{ $car[0]->model }}</p>
                <p class="u-text u-text-default u-text-9">{{ $car[0]->color }}</p>
                <p class="u-text u-text-default u-text-10">{{ $car[0]->fuel_tank }} L</p>
                <p class="u-text u-text-default u-text-11">{{ $car[0]->motor_number }}</p>
                <p class="u-text u-text-default u-text-12">{{ $car[0]->hp }} HP</p>
                <p class="u-text u-text-default u-text-13">{{ $car[0]->nos }}</p>
                <p class="u-text u-text-default u-text-14">{{ $car[0]->chasette_number }}</p>
                <p class="u-text u-text-default u-text-15">{{ $car[0]->motor_capacity }} Turbo</p>
                <p class="u-text u-text-16">{{ $car[0]->tt }}</p>
            </div>
        @else
            <div style="height: 52.5vh">
                <br><br>
                <h2 style="margin-left: 10% ">You Don't have A Car</h2>
            </div>
        @endif
    </section>

@endsection
