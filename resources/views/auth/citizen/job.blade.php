@extends('layouts.app')

@section('title', 'Jobs')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-7696">
        <div class="u-clearfix u-sheet u-valign-top u-sheet-1">
            <div class="u-form u-form-1">
                <form action="{{ Route('citizen.job.search') }}" method="POST"
                    class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px;">
                    @csrf
                    <div class="u-form-group u-form-group-1">
                        <label for="text-f1dd" class="u-label">Search For Job</label>
                        <input type="text" placeholder="Job type" id="text-f1dd" name="jtype" value="{{ old('jtype') }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    </div>
                    <div class="u-align-right u-form-group u-form-submit">
                        {{-- <a href="#"
                            class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden"> --}}
                        <button type="submit"
                            class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">submit</button>
                    </div>
                </form>
            </div>
            <h4 class="u-text u-text-default u-text-1"><b>Hello {{ auth('citizen')->user()->fname }}&nbsp;</b>
            </h4>
            <h5 class="u-text u-text-default u-text-2">Here Is All Free Jobs Search And Send Request To Employee</h5>
            <div class="u-table u-table-responsive u-table-1">
                {{-- {{ dd($jobs) }} --}}
                @if (count($jobs) == 0)
                    <h2>No Result</h2>
                    <br><br><br>
                @else
                    <table class="u-table-entity">
                        <thead class="u-grey-80 u-table-header u-table-header-1">
                            <tr style="height: 46px;">
                                <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Job NO.</b>
                                </th>
                                <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Salary<br>
                                </th>
                                <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Job type<br>
                                </th>
                                <th class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-4">Building No.<br>
                                </th>
                                <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Date<br>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="u-custom-color-1 u-table-body u-table-body-1">
                            @foreach ($jobs as $job)
                                <tr style="height: 75px;">
                                    <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6">{{ $job->jid }}
                                    </td>
                                    <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $job->salary }}
                                    </td>
                                    <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-8">{{ $job->jtype }}
                                    </td>
                                    <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-9">
                                        {{ $job->work_place_id }}</td>
                                    <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-10">
                                        {{ $job->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $jobs->appends(Request::except('jobs'))->links('pagination::bootstrap-5') }}
                @endif
            </div>
        </div>
    </section>

@endsection
