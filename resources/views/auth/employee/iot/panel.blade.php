@extends('layouts.app')

@section('title', 'IOTs panel')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>IOTs</u></b></h3>
            <a href="{{ Route('employee.addIot') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD
                IOT</a>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('id', 'No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('pname', 'Name')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('state', 'State')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('hid', 'Home No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('bid', 'Building No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-5">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Updated At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">

                        @foreach ($iots as $iot)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $iot->id }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $iot->pname }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    @if ($iot->state == 0)
                                        OFF
                                    @else
                                        ON
                                    @endif
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $iot->hid }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $iot->bid }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $iot->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $iot->updated_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ route('employee.editIot', $iot->id) }}">Edit</a>/<a href="{{ Route('employee.deleteIot', $iot->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $iots->appends(Request::except('iots'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>

@endsection
