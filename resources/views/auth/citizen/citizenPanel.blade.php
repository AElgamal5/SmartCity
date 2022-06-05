@extends('layouts.app')

@section('title', 'Citizen\'s Panel')

@section('content')

    <section class="u-align-center u-clearfix u-white u-section-2" id="carousel_081e">
        <div class="u-clearfix u-sheet u-sheet-1">
            @if (is_null(auth('citizen')->user()->avatar))
                <div alt="" class="u-border-9 u-border-palette-5-dark-3 u-image u-image-circle u-image-1"
                    data-image-width="800" data-image-height="800"
                    style="background-image: url('{{ asset('images/AvatarMaker.png') }}')"></div>
            @else
                <div alt="" class="u-border-9 u-border-palette-5-dark-3 u-image u-image-circle u-image-1"
                    data-image-width="800" data-image-height="800"
                    style="background-image: url('{{ asset('uploads/' . auth('citizen')->user()->avatar) }}')"></div>
            @endif
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1"></div>
            </div>
            <h6 class="u-align-center u-text u-text-default u-text-palette-1-base u-text-1">
                {{ auth('citizen')->user()->fname }} {{ auth('citizen')->user()->minit }}
                {{ auth('citizen')->user()->lname }}</h6>
            <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-2" data-image-width="1280"
                data-image-height="1280"></div>
            <h3 class="u-text u-text-2">E-Government</h3>
            <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-3" data-image-width="1280"
                data-image-height="853"></div>
            <h3 class="u-text u-text-default u-text-3">Citizen Dashboard</h3>
            <a href="{{ Route('citizen.dashboard') }}"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-base u-radius-20 u-btn-1"><span
                    class="u-file-icon u-icon u-icon-1">View
            </a>
            <a href="{{ Route('eGovernment') }}"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-base u-radius-20 u-btn-2"><span
                    class="u-file-icon u-icon u-icon-2">View
            </a>
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-col" style="">
                        <div class="u-size-60" style="">
                            <div class="u-layout-row" style="">
                                <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                                    <div class="u-container-layout u-container-layout-1">
                                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-4"
                                            data-image-width="150" data-image-height="105"></div>
                                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-5"
                                            data-image-width="1200" data-image-height="900"></div>
                                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-6"
                                            data-image-width="150" data-image-height="139"></div>
                                        <h3 class="u-text u-text-default u-text-4">REQUEST POLICE</h3>
                                        <h6 class="u-align-center u-text u-text-default u-text-5">View Bank</h6>
                                        <h6 class="u-align-center u-text u-text-default u-text-6">View Apartment</h6>
                                        <div class="u-form u-form-1">
                                            {{-- <form action="#" method="POST"
                                                class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                                                source="custom" name="form" style="padding: 10px;">
                                                <div class="u-form-group u-form-select u-form-group-1">
                                                    <label for="select-deb0" class="u-form-control-hidden u-label"></label>
                                                    <div class="u-form-select-wrapper">
                                                        <select id="select-deb0" name="select"
                                                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                                            <option value="Apartment 1">Apartment 1</option>
                                                            <option value="Apartment 2">Apartment 2</option>
                                                        </select>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12"
                                                            version="1" class="u-caret">
                                                            <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="u-align-center u-form-group u-form-submit">
                                                    <a href="#"
                                                        class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-3">VIEW</a>
                                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                                </div>
                                                <div class="u-form-send-message u-form-send-success"> Thank you! Your
                                                    message has been sent. </div>
                                                <div class="u-form-send-error u-form-send-message"> Unable to send your
                                                    message. Please fix errors then try again. </div>
                                                <input type="hidden" value="" name="recaptchaResponse">
                                            </form> --}}
                                            {{-- <br><br><br> --}}

                                            <a href="{{ Route('citizen.apartment') }}"
                                                class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-3"
                                                style="margin: 10px 70px">VIEW</a>


                                        </div>
                                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-7"
                                            data-image-width="1280" data-image-height="1217"></div>
                                        <a href="{{ Route('citizen.bank') }}" data-page-id="84017226"
                                            class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-base u-radius-20 u-btn-4">View</a>
                                        {{-- <a href="https://nicepage.com/c/pets-animals-html-templates"
                                            class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-base u-radius-20 u-btn-5"><span
                                                class="u-file-icon u-icon u-icon-3"><img src="images/6521124.png"
                                                    alt=""></span>&nbsp; SOS
                                        </a> --}}
                                        <form action="{{ Route('citizen.sos') }}" method="POST"
                                            class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px;">
                                            @csrf
                                            <button type="submit" value="submit"
                                                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-base u-radius-20 u-btn-5">SOS</button>
                                        </form>
                                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-8"
                                            data-image-width="1280" data-image-height="853"></div>
                                        <h3 class="u-align-center u-text u-text-default u-text-7">View Owned Cars</h3>
                                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-9"
                                            data-image-width="1280" data-image-height="1280"></div>
                                        <h3 class="u-text u-text-default u-text-8">View Discendant</h3>
                                        <h6 class="u-align-center u-text u-text-black u-text-default u-text-9">View
                                            Available<br>Jobs
                                        </h6>
                                        <div class="u-form u-form-2">
                                            <form action="{{ Route('citizen.care.show') }}" method="POST"
                                                class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px;">
                                                @csrf
                                                <div class="u-form-group u-form-select u-form-group-3">
                                                    <label for="select-deb0" class="u-form-control-hidden u-label"></label>
                                                    <div class="u-form-select-wrapper">
                                                        <select id="select-deb0" name="fname" required
                                                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                                            @if (count($cares))
                                                                <option value="">Select</option>
                                                                @foreach ($cares as $cares)
                                                                    <option value="{{ $cares->fname }}">
                                                                        {{ $cares->fname }}</option>
                                                                @endforeach
                                                            @else
                                                                <option value="">Empty</option>
                                                            @endif
                                                            {{-- <option value="">Select</option>
                                                            @foreach ($cares as $care)
                                                                <option value="{{ $care->fname }}">{{ $care->fname }}
                                                                </option>
                                                            @endforeach --}}
                                                        </select>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12"
                                                            version="1" class="u-caret">
                                                            <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="u-align-center u-form-group u-form-submit">
                                                    <button type="submit"
                                                        class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-6">Show</button>
                                                    {{-- <a href="#"
                                                        class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-6">VIEW</a>
                                                    <input type="submit" value="submit" class="u-form-control-hidden"> --}}
                                                </div>
                                                {{-- <div class="u-form-send-message u-form-send-success"> Thank you! Your
                                                    message has been sent. </div>
                                                <div class="u-form-send-error u-form-send-message"> Unable to send your
                                                    message. Please fix errors then try again. </div>
                                                <input type="hidden" value="" name="recaptchaResponse"> --}}
                                            </form>
                                        </div>
                                        <div class="u-form u-form-3">
                                            {{-- <form action="#" method="POST"
                                                class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                                                source="custom" name="form" style="padding: 10px;">
                                                <div class="u-form-group u-form-select u-form-group-5">
                                                    <label for="select-deb0" class="u-form-control-hidden u-label"></label>
                                                    <div class="u-form-select-wrapper">
                                                        <select id="select-deb0" name="select"
                                                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                                            <option value="Range Rover">Range Rover</option>
                                                            <option value="Land Cruiser">Land Cruiser</option>
                                                        </select>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12"
                                                            version="1" class="u-caret">
                                                            <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="u-align-center u-form-group u-form-submit">
                                                    <a href="#"
                                                        class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-7">VIEW</a>
                                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                                </div>
                                                <div class="u-form-send-message u-form-send-success"> Thank you! Your
                                                    message has been sent. </div>
                                                <div class="u-form-send-error u-form-send-message"> Unable to send your
                                                    message. Please fix errors then try again. </div>
                                                <input type="hidden" value="" name="recaptchaResponse">
                                            </form> --}}
                                            <br><br>
                                            <div class="u-align-center">
                                                <a href="{{ Route('citizen.car') }}"
                                                    class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-7">VIEW</a>
                                            </div>
                                        </div>
                                        <a href="{{ Route('citizen.job') }}" data-page-id="45572073"
                                            class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-base u-radius-20 u-btn-8">
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
