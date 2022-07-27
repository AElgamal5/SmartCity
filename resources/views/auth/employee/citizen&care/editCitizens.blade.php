@extends('layouts.app')

@section('title', 'Edit Citizens')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Editing Citizens</u></b></h3>
            <a href="{{ Route('employee.addCitizen') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD
                Citizen</a>
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
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>@sortablelink('id', 'SSN')</b></th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('fname', 'First Name')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('minit', 'Middel Lame')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('lname', 'Last Lame')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('email', 'Email')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('phone', 'Phone')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('sex', 'Gender')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('sstatus', 'Social Status')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('hid', 'Home No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('status', 'State')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">

                        @foreach ($citizens as $citizen)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $citizen->id }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $citizen->fname }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $citizen->minit }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $citizen->lname }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $citizen->email }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $citizen->phone }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    @if ($citizen->sex == 0)
                                            Female
                                    @else
                                            Male
                                    @endif
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    @if ($citizen->sstatus == "0")
                                            Single
                                    @else
                                            Married
                                    @endif
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $citizen->hid }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                @if ($citizen->status == 0)
                                    DEAD
                                @else
                                    Alive
                                @endif</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ Route('employee.editCitizen',$citizen->id) }}">Edit</a>{{-- /<a href="{{ Route('employee.deleteCitizen',$citizen->id) }}">Delete</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $citizens->appends(Request::except('citizens'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>

@endsection
