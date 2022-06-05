@extends('layouts.app')

@section('title', 'Payment')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-ff61">
        <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"><img
                    src="{{ asset('images/196578.png') }}" alt=""></span><span class="u-file-icon u-icon u-icon-2"><img
                    src="{{ asset('images/349228.png') }}" alt=""></span><span class="u-file-icon u-icon u-icon-3"><img
                    src="{{ asset('images/217445.png') }}" alt=""></span><span class="u-file-icon u-icon u-icon-4"><img
                    src="{{ asset('images/196545.png') }}" alt=""></span><span class="u-file-icon u-icon u-icon-5"><img
                    src="{{ asset('images/5968182.png') }}" alt=""></span>
            <p class="u-text u-text-default u-text-1" style="margin-left: 13%"> <b> {{ $total }} £</b>
            </p>
            <h4 class="u-text u-text-default u-text-2"><b><u>Payment Due:</u></b>
            </h4>
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-29 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h4 class="u-align-center u-text u-text-default u-text-3"><b>Order Summary</b>
                                </h4>
                                <p class="u-align-center u-text u-text-default u-text-4">Electric Bill</p>
                                <p class="u-align-center u-text u-text-default u-text-5">{{ $elec_amount }} £</p>
                                <p class="u-align-center u-text u-text-default u-text-6">Gas Bill</p>
                                <p class="u-align-center u-text u-text-default u-text-7">{{ $gas_amount }} £</p>
                                <p class="u-align-center u-text u-text-default u-text-8">Water Bill</p>
                                <p class="u-align-center u-text u-text-default u-text-9">{{ $water_amount }} £</p>
                                <p class="u-align-center u-text u-text-default u-text-10">{{ $other_serveies }} £</p>
                                <p class="u-align-center u-text u-text-default u-text-11">Other Services:</p>
                                <p class="u-align-center u-text u-text-default u-text-12"><b>Total:</b>
                                </p>
                                <p class="u-align-center u-text u-text-default u-text-13">{{ $total }} £</p>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-31 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <h4 class="u-align-center u-text u-text-default u-text-14"><b>Transaction</b>
                                </h4>
                                <div class="u-expanded-width u-form u-form-1">
                                    <form action="#" method="POST"
                                        class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom"
                                        name="form" style="padding: 10px;">
                                        <div class="u-form-group u-form-select u-form-group-1">
                                            <label for="select-1c20" class="u-label">Visa Card Number</label>
                                            <div class="u-form-select-wrapper">
                                                <select id="select-1c20" name="select"
                                                    class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"
                                                    required="required">
                                                    @if (count($accounts))
                                                        <option value="">Select</option>
                                                        @foreach ($accounts as $account)
                                                            <option value="{{ $account->bank_no }}">
                                                                {{ $account->bank_no }}</option>
                                                        @endforeach
                                                    @else
                                                        <option value="">You Don't Have Bank Account</option>
                                                    @endif
                                                </select>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1"
                                                    class="u-caret">
                                                    <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="u-form-checkbox u-form-group u-form-group-2">
                                            <input type="checkbox" id="checkbox-1a6d" name="checkbox" value="On">
                                            <label for="checkbox-1a6d" class="u-label">Electric Bill</label>
                                        </div>
                                        <div class="u-form-checkbox u-form-group u-form-group-3">
                                            <input type="checkbox" id="checkbox-7e0b" name="checkbox-1" value="On">
                                            <label for="checkbox-7e0b" class="u-label">Gas Bill</label>
                                        </div>
                                        <div class="u-form-checkbox u-form-group u-form-group-4">
                                            <input type="checkbox" id="checkbox-41a3" name="checkbox-2" value="On">
                                            <label for="checkbox-41a3" class="u-label">Water Bill</label>
                                        </div>
                                        <div class="u-align-right u-form-group u-form-submit">
                                            {{-- <a href="#"
                                                class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Pay</a>
                                            <input type="submit" value="submit" class="u-form-control-hidden"> --}}
                                            <button type="submit"
                                                class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Pay</button>
                                        </div>
                                        {{-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has
                                            been sent. </div>
                                        <div class="u-form-send-error u-form-send-message"> Unable to send your message.
                                            Please fix errors then try again. </div>
                                        <input type="hidden" value="" name="recaptchaResponse"> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
