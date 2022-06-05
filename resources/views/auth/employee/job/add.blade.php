@extends('layouts.app')

@section('title', 'ADD Job')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-6175">
        <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"></span>
            <h3 class="u-text u-text-default u-text-1"><b><u>ADD Job</u></b>
            </h3>
            <div class="u-expanded-width-xs u-form u-form-1">
                <form action="{{ Route('employee.addJob.save') }}" method="POST"
                    class="u-clearfix u-form-spacing-2 u-inner-form" style="padding: 8px;">
                    @csrf
                    <div class="u-clearfix u-group-elements u-group-elements-1"></div>
                    <div class="u-form-group u-form-name">
                        <label for="name-02f7" class="u-label">Job Salary: </label>
                        <input type="text" placeholder="Enter Job Salary" id="name-02f7" name="salary"
                            value="{{ old('salary') }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Job Type: </label>
                        <input type="text" placeholder="Enter Job Type" id="address-28a4" name="jtype"
                            value="{{ old('jtype') }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Work palce No.: </label>
                        <input type="text" placeholder="Work palce No." id="address-28a4" name="work_place_id"
                            value="{{ old('work_place_id') }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-select u-form-group-7">
                        <label for="select-b7c6" class="u-label">State: </label>
                        <div class="u-form-select-wrapper">
                            <select id="select-b7c6" name="confirm"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                <option value="">Select</option>
                                <option value="1">Confirmed</option>
                                <option value="0">Unconfirmed</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1"
                                class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                        {{-- <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">ADD
                            Citizen<br>
                        </a> --}}
                        <button type="submit"
                            class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">ADD
                            Job</button>
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
