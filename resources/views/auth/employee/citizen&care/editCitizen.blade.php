@extends('layouts.app')

@section('title', 'Edit Citizen')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-6175">

        <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1">
            <img src="{{ asset('images/748137.png') }}" alt=""></span>
            <h3 class="u-text u-text-default u-text-1"><b><u>Edit Citizen</u></b>
            </h3>
            <br><br><br>
            <div class="u-expanded-width-xs u-form u-form-1">
                <form action="{{ Route('employee.editCitizen.save', [$citizen[0]->id]) }}" method="POST"
                    class="u-clearfix u-form-spacing-2 u-inner-form" style="padding: 8px;">
                    @csrf
                    {{-- @method('put') --}}
                    <div class="u-clearfix u-group-elements u-group-elements-1"></div>
                    <div class="u-form-group u-form-name">
                        <label for="name-02f7" class="u-label">Full Name: </label>
                        <input type="text" placeholder="Enter Citizen's First Name" id="name-02f7" name="fname"
                            value="{{ $citizen[0]->fname }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                        <input type="text" placeholder="Enter Citizen's Middel Name" id="name-02f7" name="minit"
                            value="{{ $citizen[0]->minit }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                        <input type="text" placeholder="Enter Citizen's Last Name" id="name-02f7" name="lname"
                            value="{{ $citizen[0]->lname }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    </div>
                    {{-- <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Password: </label>
                        <input type="password" placeholder="Enter Citizen's address" id="address-28a4" name="password"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >
                    </div> --}}
                    <div class="u-form-email u-form-group">
                        <label for="email-02f7" class="u-label">Email: </label>
                        <input type="email" placeholder="Enter Citizen's email address" id="email-02f7" name="email"
                            value="{{ $citizen[0]->email }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Password: </label>
                        <input type="password" placeholder="Enter Citizen's Password" id="address-28a4" name="password"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    </div>
                    <div class="u-form-group u-form-group-4">
                        <label for="text-0ccb" class="u-label">Birth date: </label>
                        <input type="date" placeholder="Enter Citizen's SSN" id="text-0ccb" name="bdate"
                            value="{{ $citizen[0]->bdate }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-radiobutton u-form-group-5">
                        <label for="text-0ccb" class="u-label">Gender: </label>
                        <div class="u-form-radio-button-wrapper">
                            <input type="radio" name="sex" value="1" {{ $citizen[0]->sex == '1' ? 'checked' : '' }}>
                            <label class="u-label" for="radiobutton">MALE</label>
                            <br>
                            <input type="radio" name="sex" value="0" {{ $citizen[0]->sex == '0' ? 'checked' : '' }}>
                            <label class="u-label" for="radiobutton">FEMALE</label>
                            <br>
                        </div>
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-6">
                        <label for="phone-f9a2" class="u-label">Phone: </label>
                        <input type="tel"
                            placeholder="Enter Citizen's phone (e.g. 1234567890)" id="phone-f9a2" name="phone" value="{{ $citizen[0]->phone }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    </div>
                    <div class="u-form-group u-form-select u-form-group-7">
                        <label for="select-b7c6" class="u-label">Social Status: </label>
                        <div class="u-form-select-wrapper">
                            <select id="select-b7c6" name="sstatus"
                                class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                <option value="0" {{ $citizen[0]->sstatus == '0' ? 'selected' : '' }}>Single</option>
                                <option value="1" {{ $citizen[0]->sstatus == '1' ? 'selected' : '' }}>Married</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1"
                                class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-8">
                        <label for="text-68c0" class="u-label">Home ID: </label>
                        <input type="text" placeholder="Enter Citizen's Home ID" id="text-68c0" name="hid" value="{{ $citizen[0]->hid }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    </div>
                    <div class="u-form-group u-form-select u-form-group-7">
                        <label for="select-b7c6" class="u-label">State: </label>
                        <div class="u-form-select-wrapper">
                            <select id="select-b7c6" name="status"
                                class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                <option value="">Select</option>
                                <option value="0" {{ $citizen[0]->status == '0' ? 'selected' : '' }}>Dead</option>
                                <option value="1" {{ $citizen[0]->status == '1' ? 'selected' : '' }}>Alive</option>
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
                            class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Save
                            Citizen</button>
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
