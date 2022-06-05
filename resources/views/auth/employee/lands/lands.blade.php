@extends('layouts.app')

@section('title', 'Lands panel')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Lands Panel</u></b></h3>
            <a href="{{ Route('employee.addLand') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD
                Land</a>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('land_id', 'No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('llength', 'Land Length')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('lwidth', 'Land Width')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('rid', 'land No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Updated At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">

                        @foreach ($lands as $land)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $land->land_id }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $land->llength }} M</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $land->lwidth }} M</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $land->rid }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $land->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $land->updated_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ Route('employee.editLand',$land->land_id) }}">Edit</a>/<a
                                       href="{{ Route('employee.deleteLand',$land->land_id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div >
                    {{ $lands->appends(Request::except('lands'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>

@endsection
