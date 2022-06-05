@extends('layouts.app')

@section('title', 'Compliment')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-e430">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <a href="{{ Route('eGovernment') }}" data-page-id="92889271"
                class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Back&nbsp;</a>
            <h3 class="u-text u-text-default u-text-1"><b>We Like To solve Your problem&nbsp;</b>
            </h3>
            <div class="u-form u-form-1">
                <form action="{{ Route('citizen.compliment.save') }}" method="POST"
                    class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px;">
                    @csrf
                    <div class="u-form-group u-form-select u-form-group-1">
                        <label for="select-36a9" class="u-label">Select the Entitiy that you want to complain</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-36a9" name="category" required
                                class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                <option value="">Select</option>
                                <option value="Gas Entity">Gas Entity</option>
                                <option value="Electric Entity">Electric Entity</option>
                                <option value="Water Entity">Water Entity</option>
                                <option value="Other">Other</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1"
                                class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="u-form-group u-form-message">
                        <label for="message-f803" class="u-label">Message</label>
                        <textarea placeholder="Please Enter your message" rows="4" cols="50" id="message-f803" name="massage"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"
                            required=""></textarea>
                    </div>
                    <div class="u-align-right u-form-group u-form-submit">
                        {{-- <a href="#"
                            class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden"> --}}
                        <button type="submit" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Submit</button>
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
