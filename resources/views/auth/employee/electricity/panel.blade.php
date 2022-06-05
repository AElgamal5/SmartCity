@extends('layouts.app')

@section('title', 'Facility of Electricity')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-8305">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Electricity Reader</u></b></h3>
            <a href="{{ Route('employee.electricityAdd') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD
                reader</a>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    {{-- <colgroup>
                <col width="11.1%">
                <col width="16.500000000000004%">
                <col width="22.3%">
                <col width="16.7%">
                <col width="16.7%">
                <col width="16.7%">
              </colgroup> --}}
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('reader_id', '#ID')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('hid' ,'Home No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('bid', 'building No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Updated At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">
                        @foreach ($readers as $reader)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $reader->reader_id }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-8">{{ $reader->hid }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-9">{{ $reader->bid }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-10">
                                    {{ $reader->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-11">
                                    {{ $reader->updated_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-11">
                                    <a href="{{ Route('employee.editeditElectricity', $reader->reader_id) }}">Edit</a>/<a
                                        href="{{ Route('employee.deleteElectricity', $reader->reader_id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $readers->appends(Request::except('readers'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-1" id="sec-8305">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Electricity log history</u></b></h3>
            {{-- <a href="{{ Route('employee.waterAdd') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD
                Water log</a> --}}
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    {{-- <colgroup>
                <col width="11.1%">
                <col width="16.500000000000004%">
                <col width="22.3%">
                <col width="16.7%">
                <col width="16.7%">
                <col width="16.7%">
              </colgroup> --}}
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('log_id', '#ID')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('reader_id', 'Reader No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('last_read', 'Last read')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('current_read', 'Current read')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Updated At')</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">
                        @foreach ($logs as $log)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $log->log_id }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-8">{{ $log->reader_id }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-9">{{ $log->last_read }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-9">
                                    {{ $log->current_read }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-10">
                                    {{ $log->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-11">
                                    {{ $log->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $logs->appends(Request::except('logs'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
    
@endsection
