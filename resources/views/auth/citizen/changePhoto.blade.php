@extends('layouts.app')

@section('title', 'Change Password')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-ca2a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="{{ Route('citizen.dashboard') }}" data-page-id="92889271"
                class="u-active-none u-border-2 u-border-custom-color-1 u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-text-custom-color-1 u-top-left-radius-0 u-top-right-radius-0 u-btn-1">Back&nbsp;</a>

            <div class="u-form u-form-1">
                <form action="{{ Route('citizen.changePhoto.save') }}" method="POST" enctype="multipart/form-data"
                    class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px;">
                    @csrf
                    <div class="u-form-group u-form-name">
                        <label for="name-f165" class="u-label">Choose an Image</label>
                        <input type="file" name="image" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"
                            required>
                    </div>
                    <div class="u-align-right u-form-group u-form-submit">
                        {{-- <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-2">Change
                            Password</a> --}}
                        <button type="submit"
                            class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-2">Change</button>
                    </div>
                    {{-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then
                        try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse"> --}}
                </form>
            </div>
        </div>
        <br><br><br><br><br>
    </section>

@endsection
