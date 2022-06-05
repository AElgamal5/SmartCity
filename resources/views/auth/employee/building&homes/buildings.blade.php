@extends('layouts.app')

@section('title', 'Buildings panel')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Buildings Panel</u></b></h3>
            <a href="{{ Route('employee.addBuilding') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD
                Building</a>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('building_id', 'No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('no_floors', 'Floors No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('no_flats', 'Flats No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('lid', 'land No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('sb_type', 'Type')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('area', 'Area')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Updated At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">

                        @foreach ($buildings as $building)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $building->building_id }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $building->no_floors }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $building->no_flats }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $building->lid }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $building->sb_type }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $building->area }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $building->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $building->updated_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ Route('employee.editBuilding',$building->building_id) }}">Edit</a>/<a
                                       href="{{ Route('employee.deleteBuilding',$building->building_id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $buildings->appends(Request::except('buildings'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Homes Panel</u></b></h3>
            <a href="{{ Route('employee.addHome') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD
                Home</a>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('home_id', 'No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('bid', 'Building No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('area', 'Area')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('floor_no', 'Floor No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('rooms_no', 'Rooms No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('home_rent', 'Rent')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-5">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Updated At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">

                        @foreach ($homes as $home)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $home->home_id }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $home->bid }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $home->area }} M</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $home->floor_no }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $home->rooms_no }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $home->home_rent }} $</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $home->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $home->updated_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ Route('employee.editHome',$home->home_id) }}">Edit</a>/
                                    <a href="{{ Route('employee.deleteHome',$home->home_id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $homes->appends(Request::except('homes'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>

@endsection
