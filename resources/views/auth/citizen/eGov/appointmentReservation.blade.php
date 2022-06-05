@extends('layouts.app')

@section('title', 'Reserve An Appointment')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-b34a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b>Reserve An Appointment</b>
            </h3>
            <a href="{{ Route('eGovernment') }}" data-page-id="92889271"
                class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Back&nbsp;</a>
            <div class="u-form u-form-1">
                <form action="{{ Route('citizen.appointmentReservation.save') }}" method="POST" class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px;">
                    @csrf
                    <div class="u-form-date u-form-group u-form-group-1">
                        <label for="date-c499" class="u-label">Enter Date You Want To Reserve With Employee </label>
                        <input type="date" placeholder="MM/DD/YYYY" id="date-c499" name="adate"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
                    </div>
                    <div class="u-align-right u-form-group u-form-submit">
                        {{-- <a href="#"
                            class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Reserve<br>
                        </a>
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
