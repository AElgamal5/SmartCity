@extends('layouts.app')

@section('title', 'Citizens Requests')

@section('content')

    <section class="u-align-center u-clearfix u-section-1" id="sec-04a8">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h4 class="u-text u-text-default u-text-1"><b><u> Modifications&nbsp;Request </u></b>
            </h4>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity u-table-entity-1">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 49px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('req_id', 'Request ID')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('citizen_id', 'CITIZEN-SSN')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('selected_modify', 'Selected Modify')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('details', 'Details')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Action</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">
                        @foreach ($reqs1 as $req)
                            <tr style="height: 81px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-4">{{ $req->req_id }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">{{ $req->citizen_id }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6">{{ $req->selected_modify }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6">{{ $req->details }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6">{{ $req->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6"><a href="{{ Route('employee.citizenRequests.done',$req->req_id) }}">Done</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $reqs1->appends(Request::except('state0'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
            <div class="u-form u-form-1">
                {{-- <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                    source="custom" name="form" style="padding: 10px;">
                    <div class="u-form-group u-form-radiobutton u-form-group-1">
                        <div class="u-form-radio-button-wrapper">
                            <input type="radio" name="radiobutton" value="APPROVE">
                            <label class="u-label" for="radiobutton">APPROVE</label>
                            <br>
                            <input type="radio" name="radiobutton" value="DENY">
                            <label class="u-label" for="radiobutton">DENY</label>
                            <br>
                        </div>
                    </div>
                    <div class="u-align-right u-form-group u-form-submit">
                        <a href="#"
                            class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then
                        try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                </form> --}}
            </div>
        </div>
    </section>
    <br><br>
    <section class="u-clearfix u-section-2" id="sec-e46b">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><u><b>Approved Requests</b></u>
            </h3>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    {{-- <colgroup>
                        <col width="15.5%">
                        <col width="21.6%">
                        <col width="62.9%">
                    </colgroup> --}}
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 49px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('req_id', 'Request ID')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('citizen_id', 'CITIZEN-SSN')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('selected_modify', 'Selected Modify')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('details', 'Details')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Done At')</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">
                        @foreach ($reqs2 as $req)
                        <tr style="height: 81px;">
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-4">{{ $req->req_id }}</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">{{ $req->citizen_id }}</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6">{{ $req->selected_modify }}</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6">{{ $req->details }}</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6">{{ $req->created_at }}</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6">{{ $req->updated_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $reqs2->appends(Request::except('state1'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>

@endsection
