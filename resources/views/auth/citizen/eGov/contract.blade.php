@extends('layouts.app')

@section('title', 'Request Contract')

@section('content')
    @if ($type == 'Apartment')
        @if (!count($home))
            <a href="{{ Route('eGovernment') }}" data-page-id="92889271" style="margin-left: 10%"
                class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Back&nbsp;</a>
            <br><br><br>
            <H2 style="margin-left: 30%">You Have Not Complete Your Profile</H2>
            <br><br><br><br><br><br><br>
        @else
            <section class="u-clearfix u-section-1" id="sec-7d29">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <a href="{{ Route('eGovernment') }}" data-page-id="92889271"
                        class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Back&nbsp;</a>
                    <div class="u-container-style u-grey-10 u-group u-group-1">
                        <div class="u-container-layout u-container-layout-1">
                            <h3 class="u-text u-text-default u-text-1"><b>Posession Contract</b>
                            </h3>
                            <p class="u-text u-text-2" style="margin-left: 60%"><b>{{ $home[0]->home_id }}</b></p>
                            <p class="u-text u-text-3">This contract Proves That Apartment No.</p>
                            <p class="u-text u-text-4">
                                @if (count($owner))
                                    Belongs To {{ $owner[0]->fname }} {{ $owner[0]->lname }}
                                @else
                                    Belongs To {{ auth('citizen')->user()->fname }} {{ auth('citizen')->user()->lname }}
                                @endif
                            </p>
                            <p class="u-text u-text-5">Which is in building No.</p>
                            <p class="u-text u-text-6"><b>{{ $home[0]->bid }}&nbsp;</b></p>
                            <p class="u-text u-text-7"><b>EL Barcadero Seal</b>
                            </p>
                            <img class="u-image u-image-circle u-preserve-proportions u-image-1"
                                src="{{ asset('images/kisspng-letter-computer-icons-letter-e-5abfa798001415.6134645015225097200004-14-75.png') }}"
                                alt="" data-image-width="512" data-image-height="512">
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @elseif ($type == 'Car')
        <section class="u-clearfix u-section-1" id="sec-7d29">
            <div class="u-clearfix u-sheet u-sheet-1">
                <a href="{{ Route('eGovernment') }}" data-page-id="92889271"
                    class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Back&nbsp;</a>
                <div class="u-container-style u-grey-10 u-group u-group-1">
                    <div class="u-container-layout u-container-layout-1">
                        <h3 class="u-text u-text-default u-text-1"><b>Posession Contract</b>
                        </h3>
                        <p class="u-text u-text-2" style="margin-left: 50%"><b>{{ $car[0]->chasette_number }}</b></p>
                        <p class="u-text u-text-3">This contract Proves That Car No.</p>
                        <p class="u-text u-text-4">
                            Belongs To <b>{{ $owner[0]->fname }} {{ $owner[0]->lname }}</b>
                        </p>
                        <p class="u-text u-text-5">Which the Color is </p>
                        <p class="u-text u-text-6" style="margin-left: 30%"><b>{{ $car[0]->color }}&nbsp;</b></p>
                        <p class="u-text u-text-7"><b>EL Barcadero Seal</b>
                        </p>
                        <img class="u-image u-image-circle u-preserve-proportions u-image-1"
                            src="{{ asset('images/kisspng-letter-computer-icons-letter-e-5abfa798001415.6134645015225097200004-14-75.png') }}"
                            alt="" data-image-width="512" data-image-height="512">
                    </div>
                </div>
            </div>
        </section>
    @else
        <br><br>
        <a href="{{ Route('eGovernment') }}" data-page-id="92889271" style="margin-left: 10%"
            class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Back&nbsp;</a>
        <h2 style="margin-left: 40%">You Don't Have A Car</h2>
        <br><br><br><br><br><br><br><br>
    @endif

@endsection
