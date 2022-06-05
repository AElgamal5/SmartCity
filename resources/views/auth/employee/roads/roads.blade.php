@extends('layouts.app')

@section('title', 'Roads panel')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Roads</u></b></h3>
            <a href="{{ Route('employee.addRoad') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD
                Road</a>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('road_id', 'No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('rname', 'Road name')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('lanes', 'Lanes no.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('rlength', 'Length')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Updated At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">

                        @foreach ($roads as $road)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $road->road_id }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $road->rname }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $road->lanes }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $road->rlength }} Km</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $road->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $road->updated_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ Route('employee.editRoad',$road->road_id) }}">Edit</a>/<a
                                       href="{{ Route('employee.deleteRoad',$road->road_id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $roads->appends(Request::except('roads'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Start Roads</u></b></h3>
            <a href="{{ Route('employee.addStartRoad') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD Start
                Road</a>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('rid', 'Road no.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('srid', 'Start road no.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Updated At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">

                        @foreach ($sroads as $sroad)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $sroad->rid }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $sroad->srid }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $sroad->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $sroad->updated_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ Route('employee.editStartRoad',[$sroad->rid,$sroad->srid]) }}">Edit</a>/<a
                                       href="{{ Route('employee.deleteStartRoad',[$sroad->rid,$sroad->srid]) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $sroads->appends(Request::except('sroads'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>End Roads</u></b></h3>
            <a href="{{ Route('employee.addEndRoad') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD End
                Road</a>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('rid', 'Road no.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('erid', 'End road no.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-5">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at','Updated At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">

                        @foreach ($eroads as $eroad)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $eroad->rid }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $eroad->erid }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $eroad->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $eroad->updated_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ Route('employee.editEndRoad',[$eroad->rid,$eroad->erid]) }}">Edit</a>/<a
                                       href="{{ Route('employee.deleteEndRoad',[$eroad->rid,$eroad->erid]) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $eroads->appends(Request::except('eroads'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>

@endsection
