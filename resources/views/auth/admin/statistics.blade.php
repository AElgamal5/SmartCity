@extends('layouts.app')

@section('title', 'Statistics')

@section('content')

    <section class="u-align-center u-clearfix u-section-1" id="sec-556b">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h4 class="u-text u-text-default u-text-1"><b>Statistics</b>
            </h4>
            <div class="u-expanded-width u-table u-table-responsive u-table-1">
                <table class="u-table-entity u-table-entity-1">
                    {{-- <colgroup>
                        <col width="33.3%">
                        <col width="33.3%">
                        <col width="33.400000000000006%">
                    </colgroup> --}}
                    <thead class="u-table-header u-white u-table-header-1">
                        <tr style="height: 21px;">
                            <th class="u-border-1 u-border-black u-table-cell">Description</th>
                            <th class="u-border-1 u-border-black u-table-cell">Result</th>
                            {{-- <th class="u-border-1 u-border-black u-table-cell">Percent</th> --}}
                        </tr>
                    </thead>
                    <tbody class="u-table-body">
                        <tr style="height: 75px;">
                            <td
                                class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                Number of all citizens
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{ $all[0]->cn }}
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td
                                class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                Number of all females
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{ $fem[0]->cf }}
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td
                                class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                Number of all males
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{ $male[0]->cm }}
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td
                                class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                Number of all teneagers
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{ $teen[0]->ct }}
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td
                                class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                Number of all adults
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{ $adult[0]->ca }}
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td
                                class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                Number of all oldies
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{ $old[0]->co }}
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td
                                class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                Number of all children
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{ $child[0]->cc }}
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td
                                class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                Number of all married
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{ $married[0]->cm }}
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td
                                class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                Number of all homes
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{ $home[0]->ch }}
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td
                                class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                Number of all empty homes
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{ $ehome[0]->ceh }}
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td
                                class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                Number of all companies
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{ $company[0]->cc }}
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td
                                class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                Number of all working people
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{ $wpeople[0]->cj }}
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td
                                class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                Number of all non-working people
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{-- {{ $nwpeople[0]->cnj }} --}}
                            </td>
                        </tr>
                        @foreach ($mostworked as $mw)
                            <tr style="height: 75px;">
                                <td
                                    class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                    number of worked profession ({{ $mw->jtype }})
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                    {{ $mw->nowp }}
                                </td>
                            </tr>
                        @endforeach
                        @foreach ($mostwanted as $mw)
                            <tr style="height: 75px;">
                                <td
                                    class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                    number of wanted profession ({{ $mw->jtype }})
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                    {{ $mw->an }}
                                </td>
                            </tr>
                        @endforeach
                        @foreach ($bankacc as $ba)
                            <tr style="height: 75px;">
                                <td
                                    class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                    number of accounts pre bank ({{ $ba->bank_name }})
                                </td>
                                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                    {{ $ba->an }}
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr style="height: 75px;">
                            <td class="u-border-3 u-border-grey-30 u-custom-color-1 u-first-column u-table-cell u-table-cell-4">
                                most worked profession ({{ $mostworked[0]->jtype }})
                            </td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">
                                {{ $mostworked[0]->nowp }}
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
