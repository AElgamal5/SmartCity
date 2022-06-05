@extends('layouts.app')

@section('title', 'Police Requests')

@section('content')

    <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="" id="sec-35d5" data-image-width="1280"
        data-image-height="853">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-default u-text-1"><span class="u-file-icon u-icon"><img
                        src="{{ asset('images/1138048.png') }}" alt=""></span>&nbsp;POLICE
            </h1>
            <h4 class="u-text u-text-default u-text-2">REQUESTS LOG</h4>
            <div class="u-expanded-width u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    {{-- <colgroup>
                        <col width="25%">
                        <col width="25%">
                        <col width="25.000000000000007%">
                        <col width="24.900000000000006%">
                    </colgroup> --}}
                    <thead class="u-black u-table-header u-table-header-1">
                        <tr style="height: 36px;">
                            <th class="u-border-1 u-border-black u-table-cell">@sortablelink('sos_id', 'Request No.')</th>
                            <th class="u-border-1 u-border-black u-table-cell">@sortablelink('citizen_id', 'Citizen SSN')</th>
                            <th class="u-border-1 u-border-black u-table-cell">@sortablelink('type', 'RESPOND STATE')</th>
                            <th class="u-border-1 u-border-black u-table-cell">@sortablelink('created_at', 'Date')</th>
                            <th class="u-border-1 u-border-black u-table-cell">Responce</th>
                        </tr>
                    </thead>
                    <tbody class="u-table-body">
                        @foreach ($reqs as $req)
                            <tr style="height: 70px;">
                                <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $req->sos_id }}</td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $req->citizen_id }}</td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell">
                                    @if ($req->type == 0)
                                        unchecked
                                    @else
                                        Checked
                                    @endif
                                </td>
                                {{-- Carbon\Carbon::createFromTimestamp($req->created_at)->toDateTimeString()\Carbon\Carbon::parse($req->created_at) --}}
                                <td class="u-border-1 u-border-grey-30 u-table-cell">
                                    {{ \Carbon\Carbon::parse($req->created_at) }}</td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell" style="text-align: center">
                                    @if ($req->type == 0)
                                        <form action="{{ Route('employee.sos.checked', $req->sos_id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-3">checked</button>
                                        </form>
                                    @else
                                        Done
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $reqs->appends(Request::except('sos'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
            <h3 class="u-text u-text-3">People &amp;​ Police is for<br>&nbsp;the service of Motherland
            </h3>
        </div>
    </section>

@endsection
