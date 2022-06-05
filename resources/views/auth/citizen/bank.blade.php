@extends('layouts.app')

@section('title', 'Bank')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-246a">
        <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"><img
                    src="{{ asset('images/2830284.png') }}" alt=""></span>
            @if (count($accounts))
                <div class="u-form u-form-1">
                    <form action="{{ Route('citizen.bank.trans') }}" method="POST" class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px;">
                        @csrf
                        <div class="u-form-group u-form-select u-form-group-1">
                            <label for="select-66aa" class="u-label"><b>Accounts</b></label>
                            <div class="u-form-select-wrapper">
                                <select id="select-66aa" name="bank_no"
                                    class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                    <option value="all">ALL Accounts</option>
                                    @foreach ($accounts as $acc)
                                        <option value="{{ $acc->bank_no }}">{{ $acc->bank_no }}</option>
                                    @endforeach
                                </select>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1"
                                    class="u-caret">
                                    <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="u-align-right u-form-group u-form-submit">
                            {{-- <a href="#"
                            class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden"> --}}
                            <button type="submit"
                                class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Submit</button>
                        </div>
                        {{-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then
                        try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse"> --}}
                    </form>
                </div><span class="u-file-icon u-icon u-icon-2">
                    <img src="{{ asset('images/39134.png') }}" alt=""></span>
                <p class="u-text u-text-default u-text-1"><b>Citizen SSN:</b>
                </p>
                <p class="u-text u-text-default u-text-2">{{ auth('citizen')->user()->id }}</p><span
                    class="u-file-icon u-icon u-icon-3"><img src="{{ asset('images/783886.png') }}" alt=""></span><span
                    class="u-file-icon u-icon u-icon-4"><img src="{{ asset('images/1086741.png') }}" alt=""></span>
                <p class="u-text u-text-default u-text-3"><b>Transactions</b>
                </p>
                <div class="u-table u-table-responsive u-table-1">
                    <table class="u-table-entity">
                        <thead class="u-grey-80 u-table-header u-table-header-1">
                            <tr style="height: 36px;">
                                <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Trans NO.</b></th>
                                <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Acount NO.</b></th>
                                <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Amount</b></th>
                                <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Send TO</b></th>
                                <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Date</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="u-custom-color-1 u-table-body u-table-body-1">
                            @foreach ($trans as $tran)
                                <tr style="height: 75px;">
                                    <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $tran->trans_id }}</td>
                                    <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-8">{{ $tran->bank_no }}</td>
                                    <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-9">{{ $tran->amount }}$</td>
                                    <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-10">{{ $tran->sendto }}</td>
                                    <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-11">{{ $tran->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $trans->appends(Request::except('transactions'))->links('pagination::bootstrap-5') }}
                </div>
            @else
                <br><br>
                <h2 style="margin-left: 25%">You Don't have A Bank Account</h2>
            @endif

        </div>
    </section>

@endsection
