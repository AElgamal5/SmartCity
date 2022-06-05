@extends('layouts.app')

@section('title', 'E-Government')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-246a">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <img class="u-image u-image-default u-image-1"
                src="images/dfdc362ec3d2de47caadbd714800a9a3f0412f552bafc1155763fa0336662f4e18ce024d8ec867dc87214c5a2ada574a5b530f29968016fc88c546_1280.jpg"
                alt="" data-image-width="1280" data-image-height="853">
            <h6 class="u-align-center u-text u-text-default u-text-1">WE MAKE IT EASY FOR YOU</h6>
            <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-col" style="">
                        <div class="u-size-60" style="">
                            <div class="u-layout-row" style="">
                                <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                                    <div class="u-container-layout u-container-layout-1">
                                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-2"
                                            data-image-width="1280" data-image-height="853"></div>
                                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-3"
                                            data-image-width="150" data-image-height="100"></div>
                                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-4"
                                            data-image-width="1280" data-image-height="825"></div>
                                        <h6 class="u-align-center u-text u-text-default u-text-2">Birth Certificate</h6>
                                        <h3 class="u-text u-text-default u-text-3">ID</h3>
                                        <h6 class="u-align-center u-text u-text-default u-text-4">Driving Licence</h6>
                                        <a href="{{ Route('citizen.drivingLicense') }}" data-page-id="3070726023"
                                            class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-base u-radius-20 u-btn-1">View</a>
                                        <a href="{{ Route('citizen.idCard') }}" data-page-id="668810255" style="margin-left:45%"
                                            class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-base u-radius-20 u-btn-2">
                                            View</a>
                                        <a href="{{ Route('citizen.certficateOfBirth') }}" data-page-id="63571546"
                                            class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-base u-radius-20 u-btn-3">
                                            View</a>
                                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-5"
                                            data-image-width="1280" data-image-height="1280"></div>
                                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-6"
                                            data-image-width="1280" data-image-height="852"></div>
                                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-7"
                                            data-image-width="1041" data-image-height="1280"></div>
                                        <h3 class="u-align-center u-text u-text-default u-text-5">Submit<br>Compliment
                                        </h3>
                                        <h6 class="u-align-center u-text u-text-black u-text-default u-text-6">
                                            Appointment<br>&nbsp;Reservation
                                        </h6>
                                        <h3 class="u-text u-text-default u-text-7">Request Contract</h3>
                                        <div class="u-form u-form-1">
                                            <form action="{{ Route('citizen.showContract') }}" method="POST"
                                                class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px;">
                                                @csrf
                                                <div class="u-form-group u-form-select u-form-group-1">
                                                    <label for="select-deb0" class="u-form-control-hidden u-label"></label>
                                                    <div class="u-form-select-wrapper">
                                                        <select id="select-deb0" name="select" required
                                                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                                            <option value="">Select</option>
                                                            <option value="Apartment">Apartment</option>
                                                            <option value="Car">Car</option>
                                                            {{-- <option value="Cara">Cara</option> --}}
                                                        </select>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12"
                                                            version="1" class="u-caret">
                                                            <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="u-align-right u-form-group u-form-submit">
                                                    <a href="#"
                                                        class="u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-4">VIEW</a>
                                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                                </div>
                                                {{-- <div class="u-form-send-message u-form-send-success"> Thank you! Your
                                                    message has been sent. </div>
                                                <div class="u-form-send-error u-form-send-message"> Unable to send your
                                                    message. Please fix errors then try again. </div>
                                                <input type="hidden" value="" name="recaptchaResponse"> --}}
                                            </form>
                                        </div>
                                        <a href="{{ Route('citizen.compliment') }}" data-page-id="2474514845"
                                            class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-base u-radius-20 u-btn-5">
                                            View</a>
                                        <a href="{{ Route('citizen.appointmentReservation') }}" data-page-id="633723907"
                                            class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-base u-radius-20 u-btn-6">
                                            View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
