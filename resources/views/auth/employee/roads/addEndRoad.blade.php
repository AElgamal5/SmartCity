@extends('layouts.app')

@section('title', 'Add End Road')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-6175">
        <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"></span>
            <h3 class="u-text u-text-default u-text-1"><b><u>ADD End Road</u></b>
            </h3>
            <div class="u-expanded-width-xs u-form u-form-1">
                <form action="{{ Route('employee.addEndRoad.save') }}" method="POST" class="u-clearfix u-form-spacing-2 u-inner-form"
                    style="padding: 8px;">
                    @csrf
                    <div class="u-clearfix u-group-elements u-group-elements-1"></div>
                    <div class="u-form-group u-form-name">
                        <label for="name-02f7" class="u-label">Road no.: </label>
                        <input type="text" placeholder="Enter Road no." id="name-02f7" name="rid" value="{{ old('rid') }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">End Road no.: </label>
                        <input type="text" placeholder="Enter End Road no." id="address-28a4" name="erid" value="{{ old('erid') }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                        {{-- <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">ADD
                            Citizen<br>
                        </a> --}}
                        <button type="submit" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">ADD End Road</button>
                    </div>
                    {{-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then
                        try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse"> --}}
                </form>
            </div>
        </div>
    </section>

@endsection
