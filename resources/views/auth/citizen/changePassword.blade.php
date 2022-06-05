@extends('layouts.app')

@section('title', 'Change Password')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-ca2a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="{{ Route('citizen.dashboard') }}" data-page-id="92889271"
                class="u-active-none u-border-2 u-border-custom-color-1 u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-text-custom-color-1 u-top-left-radius-0 u-top-right-radius-0 u-btn-1">Back&nbsp;</a>
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span
                                class="u-custom-item u-file-icon u-icon u-text-custom-color-1 u-icon-1"><img
                                    src="{{ asset('images/33.png') }}" alt=""></span>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span
                                class="u-custom-item u-file-icon u-icon u-icon-2"><img
                                    src="{{ asset('images/3064155.png') }}" alt=""></span>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span
                                class="u-custom-item u-file-icon u-icon u-icon-3"><img
                                    src="{{ asset('images/3064155.png') }}" alt=""></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="u-form u-form-1">
                <form action="{{ Route('citizen.changePassword.save') }}" method="POST"
                    class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px;">
                    @csrf
                    <div class="u-form-group u-form-name">
                        <label for="name-f165" class="u-label">Old Password</label>
                        <input type="password" placeholder="Enter your old password" id="name-f165" name="oldPassword"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
                    </div>
                    <div class="u-form-email u-form-group">
                        <label for="email-f165" class="u-label">New Password</label>
                        <input type="password" placeholder="Enter your New password" id="email-f165" name="newPassword"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
                    </div>
                    <div class="u-form-group u-form-group-3">
                        <label for="text-948b" class="u-label">New Password confirmation</label>
                        <input type="password" placeholder="Confirm new Password" id="text-948b"
                            name="newPassword_confirmation" required
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    </div>
                    <div class="u-align-right u-form-group u-form-submit">
                        {{-- <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-2">Change
                            Password</a> --}}
                        <button type="submit"
                            class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-2">Change
                            Password</button>
                    </div>
                    {{-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then
                        try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse"> --}}
                </form>
            </div><span class="u-custom-item u-file-icon u-icon u-icon-4"><img src="{{ asset('images/3064155.png') }}"
                    alt=""></span>
        </div>
    </section>

@endsection
