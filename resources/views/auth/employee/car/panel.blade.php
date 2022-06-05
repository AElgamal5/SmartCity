@extends('layouts.app')

@section('title', 'Cars panel')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Cars</u></b></h3>
            <a href="{{ Route('employee.addCar') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD
                Car</a>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('car_id', 'No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('owner_id', 'Citizen SSN')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('name', 'Name')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('model', 'Model')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('color', 'Color')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('motor_number', 'Motor No')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('chasette_number', 'Chasette No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('motor_capacity', 'Motor Capacity')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('cylinder_number', 'Cylinder No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('fuel_tank', 'Fuel Tank')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('hp', 'HP')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('nos', 'Nos')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('tt', 'TT')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-5">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Updated At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">

                        @foreach ($cars as $car)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $car->car_id }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $car->owner_id }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $car->name }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $car->model }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $car->color }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $car->motor_number }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $car->chasette_number }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $car->motor_capacity }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $car->cylinder_number }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $car->fuel_tank }}L</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $car->hp }}HP
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $car->nos }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $car->tt }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $car->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $car->updated_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ Route('employee.editCar', $car->car_id) }}">Edit</a>/<a
                                        href="{{ Route('employee.deleteCar', $car->car_id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $cars->appends(Request::except('cars'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>

@endsection
