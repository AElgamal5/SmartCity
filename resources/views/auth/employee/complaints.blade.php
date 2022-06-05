@extends('layouts.app')

@section('title', 'Citizen complaints')

@section('content')

    <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="" id="sec-35d5">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h4 class="u-text u-text-default u-text-2">Citizen complaints</h4>
            <div class="u-expanded-width u-table u-table-responsive u-table-1">
                <table class="u-table-entity" style="color: black">
                    {{-- <colgroup>
                    <col width="25%">
                    <col width="25%">
                    <col width="25.000000000000007%">
                    <col width="24.900000000000006%">
                </colgroup> --}}
                    <thead class="u-black u-table-header u-table-header-1">
                        <tr style="height: 36px;">
                            <th class="u-border-1 u-border-black u-table-cell">@sortablelink('id', 'No.')</th>
                            <th class="u-border-1 u-border-black u-table-cell">@sortablelink('category', 'Category')</th>
                            <th class="u-border-1 u-border-black u-table-cell">@sortablelink('citizen_id', 'Citizen SSN')</th>
                            <th class="u-border-1 u-border-black u-table-cell">@sortablelink('massage', 'Massage')</th>
                            <th class="u-border-1 u-border-black u-table-cell">@sortablelink('state', 'State')</th>
                            <th class="u-border-1 u-border-black u-table-cell">@sortablelink('created_at', 'Date')</th>
                            <th class="u-border-1 u-border-black u-table-cell">Responce</th>
                        </tr>
                    </thead>
                    <tbody class="u-table-body">
                        @foreach ($coms as $com)
                            <tr style="height: 70px;">
                                <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $com->id }}</td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $com->category }}</td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $com->citizen_id }}</td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $com->massage }}</td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell">
                                    @if ($com->state == 0)
                                        unchecked
                                    @else
                                        Checked
                                    @endif
                                </td>
                                {{-- Carbon\Carbon::createFromTimestamp($req->created_at)->toDateTimeString()\Carbon\Carbon::parse($req->created_at) --}}
                                <td class="u-border-1 u-border-grey-30 u-table-cell">
                                    {{ \Carbon\Carbon::parse($com->created_at) }}</td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell" style="text-align: center">
                                    @if ($com->state == 0)
                                        {{-- <a href="{{ Route('employee.forgetPasswordsState', $for->id) }}"
                                        cla ss="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-3">checked</a> --}}
                                        <form action="{{ Route('employee.complaintsState', $com->id) }}" method="post">
                                            @csrf
                                            <button type="submit"
                                                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-3">checked</button>
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
                    {{ $coms->appends(Request::except('complaints'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>

@endsection
