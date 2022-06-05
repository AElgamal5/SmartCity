@extends('layouts.app')

@section('title', 'Citizen Care')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-7d29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b><u>Editing Citizens Care Relations</u></b></h3>
            <a href="{{ Route('employee.addCitizenCare') }}" data-page-id="184833867"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">ADD
                new Relation</a>
            <div class="u-table u-table-responsive u-table-1">
                @if ($cares->count())
                <table class="u-table-entity">
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 69px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>@sortablelink('id', 'SSN')</b></th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>@sortablelink('cid', 'CSSN')</b></th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>@sortablelink('ctype', 'Care Type')</b></th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">
                        @foreach ($cares as $care )
                            <tr style="height: 59px;">
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $care->id }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $care->cid }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">{{ $care->ctype }}
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                    <a href="{{ Route('employee.editCitizenCare',[$care->id,$care->cid]) }}">Edit</a>/<a
                                       href="{{ Route('employee.deleteCitizenCare',[$care->id,$care->cid]) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                   <h2>No Records</h2>
                @endif
                <div>
                    {{ $cares->appends(Request::except('cares'))->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>

@endsection
