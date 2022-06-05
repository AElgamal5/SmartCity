@extends('layouts.app')

@section('title', 'Edit Assign Job')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-6175">
        <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"></span>
            <h3 class="u-text u-text-default u-text-1"><b><u>Edit Assign Job</u></b>
            </h3>
            <div class="u-expanded-width-xs u-form u-form-1">
                <form action="{{ Route('employee.editAJob.save',$ajob[0]->id) }}" method="POST" class="u-clearfix u-form-spacing-2 u-inner-form"
                    style="padding: 8px;">
                    @csrf
                    <div class="u-clearfix u-group-elements u-group-elements-1"></div>
                    <div class="u-form-group u-form-name">
                        <label for="name-02f7" class="u-label">Citizen SSN: </label>
                        <input type="text" placeholder="Enter Citizen SSN" id="name-02f7" name="citizen_id" value="{{ $ajob[0]->citizen_id }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Job no.: </label>
                        <input type="text" placeholder="Enter Job no." id="address-28a4" name="jid" value="{{ $ajob[0]->jid }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    {{-- <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Building no.: </label>
                        <input type="text" placeholder="Enter Building no." id="address-28a4" name="ap_id" value="{{ $ajob[0]->ap_id }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div> --}}
                    <div class="u-align-center u-form-group u-form-submit">
                        {{-- <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">ADD
                            Citizen<br>
                        </a> --}}
                        <button type="submit" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Save Assign Job</button>
                    </div>
                    {{-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then
                        try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse"> --}}
                </form>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
@endsection
