@extends('layouts.app')

@section('title', 'Bank panel')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Bank Panel</u></b></h3>
            <a href="{{ Route('employee.addBankAccount') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD
                Bank</a>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>@sortablelink('acc_id', 'NO.')</b></th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('bank_no', 'Bank NO.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('bank_name', 'Bank name')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('citizen_id', 'Citizen SSN')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('balance', 'Balance')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('created_at', 'Created AT')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Updated At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">

                        @foreach ($banks as $bank)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $bank->acc_id }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $bank->bank_no }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $bank->bank_name }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $bank->citizen_id }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $bank->balance }}£
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $bank->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $bank->updated_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ Route('employee.editBankAccount', $bank->bank_no) }}">Edit</a>/
                                    <a href="{{ Route('employee.deleteBankAccount', $bank->bank_no) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $banks->appends(Request::except('banks'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Transactions Panel</u></b></h3>
            <a href="{{ Route('employee.addBankTrans') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD
                Transaction</a>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('trans_id', 'Trans ID')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('bank_no', 'Bank no.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('amount', 'Amount')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('sendto', 'send To')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('created_at', 'Created AT')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Updated At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">

                        @foreach ($transs as $trans)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $trans->trans_id }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $trans->bank_no }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $trans->amount }}£</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $trans->sendto }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $trans->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $trans->updated_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ Route('employee.editBankTransaction', $trans->trans_id) }}">Edit</a>/<a
                                        href="{{ Route('employee.deleteBankTransaction', $trans->trans_id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $transs->appends(Request::except('transactions'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
    <script>
        (function() {
            var sneaky = new ScrollSneak(location.hostname),
                tabs = document.getElementById('tabs').getElementsByTagName('li'),
                i = 0,
                len = tabs.length;
            for (; i < len; i++) {
                tabs[i].onclick = sneaky.sneak;
            }

            document.getElementById('next').onclick = sneaky.sneak;
        })();
    </script>
@endsection
