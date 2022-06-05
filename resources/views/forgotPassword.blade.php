@extends('layouts.app')

@section('title', 'Forget password')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-5a0d">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img class="u-image u-image-default u-preserve-proportions u-image-1"
                src="images/kisspng-letter-computer-icons-letter-e-5abfa798001415.6134645015225097200004-4.png" alt=""
                data-image-width="512" data-image-height="512">
            <h4 class="u-text u-text-default u-text-1">
                <span class="u-text-custom-color-1"> L-</span>Barcadero
            </h4>
            <div class="u-form u-form-1">
                <form action="{{ Route('forgotPassword.save') }}" method="POST" class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px;">
                    @csrf
                    <div class="u-form-email u-form-group">
                        <label for="email-6799" class="u-label">Enter Your Email To Recover</label>
                        <input type="email" placeholder="Enter Your email address" id="email-6799" name="email"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                        {{-- <a href="#"
                            class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden"> --}}
                        <button type="submit" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">SEND</button>
                    </div>
                    {{-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then
                        try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse"> --}}
                </form>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-f025">
        <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>

@endsection
