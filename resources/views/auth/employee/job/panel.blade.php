@extends('layouts.app')

@section('title', 'Jobs panel')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Jobs</u></b></h3>
            <a href="{{ Route('employee.addJob') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD
                Job</a>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('jid', 'No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('salary', 'Salary')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('jtype', 'Type')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('work_place_id', 'bulding no.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('confirm', 'State')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Updated At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">

                        @foreach ($jobs as $job)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $job->jid }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $job->salary }} $
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $job->jtype }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $job->work_place_id }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> 
                                    @if ($job->confirm == 1)
                                        Confirmed
                                    @else
                                        Unconfirmed
                                    @endif
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $job->created_at }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $job->updated_at }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ Route('employee.editJob', $job->jid) }}">Edit</a>/<a
                                        href="{{ Route('employee.deletejob', $job->jid) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $jobs->appends(Request::except('jobs'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Assign Jobs</u></b></h3>
            <a href="{{ Route('employee.addAJob') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">Assign
                Job</a>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('id', 'No.')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('citizen_id', 'Citizen SSN')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('jid', 'Job ID')</th>
                            {{-- <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('ap_id', 'Building ID')</th> --}}
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('created_at', 'Created At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">@sortablelink('updated_at', 'Updated At')</th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">

                        @foreach ($ajobs as $ajob)
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $ajob->id }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $ajob->citizen_id }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $ajob->jid }}
                                </td>
                                {{-- <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7"> {{ $ajob->ap_id }}
                                </td> --}}
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $ajob->created_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">
                                    {{ $ajob->updated_at }}</td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ Route('employee.editAJob', $ajob->id) }}">Edit</a>/<a
                                        href="{{ Route('employee.deleteAJob', $ajob->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $ajobs->appends(Request::except('ajobs'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>

@endsection
