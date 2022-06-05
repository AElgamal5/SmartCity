@extends('layouts.app')

@section('title', 'Apartment')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-edd9">
        <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"><img
                    src="{{ asset('images/1684070.png') }}" alt=""></span>
            <p class="u-large-text u-text u-text-default u-text-variant u-text-1"><b><u>Smart Home&nbsp;</u></b>
            </p><span class="u-file-icon u-icon u-icon-2"><img src="{{ asset('images/783886.png') }}" alt=""></span>
            <p class="u-text u-text-2"><b style="">Citizen SSN:</b>
            </p>
            <p class="u-text u-text-default u-text-3">{{ auth('citizen')->user()->id }}</p>
            <p class="u-text u-text-default u-text-4">{{ $home[0]->home_id }}</p>
            <p class="u-text u-text-default u-text-5"> Apartment NO.:<br>
                <br>NO. of Rooms:<br>
                <br>Apartment size in m²:
            </p>
            <p class="u-text u-text-default u-text-6"><b>Apartment's Address:<br>
                    <br>Building NO.:<br>
                    <br>Floor NO.:<br></b>
                <br>
            </p>
            <p class="u-text u-text-default u-text-7">{{ $home[0]->road_name }}</p>
            <p class="u-text u-text-default u-text-8">{{ $home[0]->bid }}</p>
            <p class="u-text u-text-default u-text-9">{{ $home[0]->rooms_no }}</p>
            <p class="u-text u-text-default u-text-10">{{ $home[0]->floor_no }}</p>
            <p class="u-text u-text-default u-text-11">{{ $home[0]->area }}</p><span
                class="u-file-icon u-icon u-icon-3"><img src="{{ asset('images/125768.png') }}" alt=""></span>
            <p class="u-text u-text-default u-text-12"><b>Control Lights</b>
            </p>
            <p class="u-text u-text-default u-text-13"><b>You Can Control all Your Light System Remotely</b>
            </p>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <colgroup>
                        <col width="27.8%">
                        <col width="39.2%">
                        <col width="33%">
                    </colgroup>
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 72px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Lamp NO.</b>
                            </th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Lamp State (ON/OFF)</b>
                                <br>
                            </th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Action</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">
                        <tr style="height: 75px;">
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-4">1</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">ON</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="Payment.html" data-page-id="645016483"
                class="u-black u-border-none u-btn u-btn-round u-button-style u-radius-28 u-btn-1">ON</a>
            <a href="Payment.html" data-page-id="645016483"
                class="u-black u-border-none u-btn u-btn-round u-button-style u-radius-28 u-btn-2">OFF</a><span
                class="u-file-icon u-icon u-icon-4"><img
                    src="{{ asset('images/opened-door-aperture-png-icon-101378.png') }}" alt=""></span>
            <p class="u-text u-text-default u-text-14"><b>Control Doors</b>
            </p>
            <p class="u-text u-text-default u-text-15"><b> You Can Control your Doors Remotely</b>
            </p>
            <div class="u-table u-table-responsive u-table-2">
                <table class="u-table-entity">
                    <colgroup>
                        <col width="19.4%">
                        <col width="45.7%">
                        <col width="34.9%">
                    </colgroup>
                    <thead class="u-grey-80 u-table-header u-table-header-2">
                        <tr style="height: 70px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Door NO.</b>
                            </th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Door State (Opened/Closed)</b>
                                <br>
                            </th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Action</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-2">
                        <tr style="height: 75px;">
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-10">1</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-11">Opened</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="Payment.html" data-page-id="645016483"
                class="u-black u-border-none u-btn u-btn-round u-button-style u-radius-28 u-btn-3">Close</a>
            <a href="Payment.html" data-page-id="645016483"
                class="u-black u-border-none u-btn u-btn-round u-button-style u-radius-28 u-btn-4">Open</a>
        </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-b477">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-text u-text-1">
                <span style="font-size: 1.25rem;"><b>
                        <span style="font-size: 1.5rem;">Electricity </span>:</b>
                    <br>
                </span>Last read:<br>
                <br>Current read:<br>
                <br>Taxes:<br>
                <br>Total Amount In EGP:<br>
                <br>
                <span style="font-size: 1.5rem;"><b>Gas:</b>
                    <br>
                </span>Last read:<br>
                <br>Current read:<br>
                <br>Taxes:<br>
                <br>Total Amount In EGP:<br>
                <br>
            </p><span class="u-file-icon u-icon u-icon-1"><img src="{{ asset('images/702461.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-2"><img src="{{ asset('images/252851.png') }}" alt=""></span>
            <p class="u-text u-text-default u-text-2">
                <span style="font-size: 1.5rem;"><b>Water:</b>
                    <br>
                </span>Last read:<br>
                <br>Current read:<br>
                <br>Taxes:<br>
                <br>Total Amount In EGP:
            </p>
            <p class="u-text u-text-default u-text-3">{{ $facilities['elec'][0]->el }} kW</p>
            <p class="u-text u-text-default u-text-4">{{ $facilities['water'][0]->wl }} KW</p>
            <p class="u-text u-text-default u-text-5">{{ $facilities['elec'][0]->ec }} kW</p>
            <p class="u-text u-text-default u-text-6">{{ $facilities['water'][0]->wc }} KW</p>
            <p class="u-text u-text-default u-text-7">5%</p>
            <p class="u-text u-text-default u-text-8">5%</p>
            <p class="u-text u-text-default u-text-9">{{ $facilities['elec_amount'] }} EGP</p>
            <p class="u-text u-text-default u-text-10">{{ $facilities['water_amount'] }} EGP</p><span
                class="u-file-icon u-icon u-icon-3"><img src="{{ asset('images/3835.png') }}" alt=""></span>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <colgroup>
                        <col width="19%">
                        <col width="48%">
                        <col width="33%">
                    </colgroup>
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 72px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Bill</b>
                            </th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Payment Status(Paid/NotPaid)</b>
                                <br>
                            </th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Action</th>
                        </tr>
                    </thead>
                    <tbody class="u-custom-color-1 u-table-body u-table-body-1">
                        <tr style="height: 75px;">
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-4">Electric</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">Paid</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6"></td>
                        </tr>
                        <tr style="height: 75px;">
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">Gas</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-8">NotPaid</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-9"></td>
                        </tr>
                        <tr style="height: 75px;">
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-10">Water</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-11">Paid</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="Payment.html" data-page-id="645016483"
                class="u-black u-border-none u-btn u-btn-round u-button-style u-radius-28 u-btn-1">PAY</a>
            <a href="Payment.html" data-page-id="645016483"
                class="u-black u-border-none u-btn u-btn-round u-button-style u-radius-28 u-btn-2">PAY</a>
            <a href="Payment.html" data-page-id="645016483"
                class="u-black u-border-none u-btn u-btn-round u-button-style u-radius-28 u-btn-3">PAY</a>
            <p class="u-text u-text-default u-text-11">{{ $facilities['gas'][0]->gl }} kW</p>
            <p class="u-text u-text-default u-text-12">{{ $facilities['gas'][0]->gc }} kW</p>
            <p class="u-text u-text-default u-text-13">5%</p>
            <p class="u-text u-text-default u-text-14">{{ $facilities['gas_amount'] }} EGP</p>
        </div>
    </section>
    {{-- <section class="u-clearfix u-section-1" id="sec-edd9">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img alt="" class="u-border-1 u-border-palette-5-dark-3 u-image u-image-default u-image-1"
                data-image-width="1280" data-image-height="762"
                src="{{ asset('images/ac2f4902169f167269f896aecae99238d9000e266a1468a3a69557e916305e7a0bbf4b6a7a2325b006d6b9247cf5f14bfc725a644c866220ba8242_1280.jpg') }}"><span
                class="u-file-icon u-icon u-icon-1"><img src="{{ asset('images/1684070.png') }}" alt=""></span>
            <p class="u-large-text u-text u-text-default u-text-variant u-text-1"><b><u>Apartment Details&nbsp;</u></b>
            </p>
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1"><span
                                    class="u-file-icon u-icon u-icon-2"><img src="{{ asset('images/783886.png') }}"
                                        alt=""></span>
                                <p class="u-text u-text-2"><b>Citizen SSN:</b>
                                </p>
                                <p class="u-text u-text-default u-text-3">{{ auth('citizen')->user()->id }}</p>
                                <p class="u-text u-text-default u-text-4"><b>Apartment's Address:<br>
                                        <br>Building NO.:<br>
                                        <br>Floor NO.:<br>
                                        <br>Apartment NO.:<br>
                                        <br>NO. of Rooms:<br>
                                        <br>Apartment size in m²:<br></b>
                                    <br>
                                </p>
                                <p class="u-text u-text-default u-text-5">{{ $home[0]->road_name }}</p>
                                <p class="u-text u-text-default u-text-6">{{ $home[0]->bid }}</p>
                                <p class="u-text u-text-default u-text-7">{{ $home[0]->floor_no }}</p>
                                <p class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-8">
                                    {{ $home[0]->rooms_no }}</p>
                                <p class="u-text u-text-default u-text-9">{{ $home[0]->home_id }}</p>
                                <p class="u-text u-text-default u-text-10">{{ $home[0]->area }}</p>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                            <div
                                class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-container-layout-2">
                                <span class="u-file-icon u-icon u-icon-3"><img src="{{ asset('images/252851.png') }}"
                                        alt=""></span>
                                <p class="u-text u-text-11">
                                    <span style="font-size: 1.125rem;"><b>Electricity :</b>
                                        <br>
                                    </span>Last read:<br>
                                    <br>Current read:<br>
                                    <br>Taxes:<br>
                                    <br>Total Amount In EGP:<br>
                                    <br>
                                    <span style="font-size: 1.125rem;"><b>Gas:</b>
                                        <br>
                                    </span>Last read:<br>
                                    <br>Current read:<br>
                                    <br>Taxes:<br>
                                    <br>Total Amount In EGP:<br>
                                    <br>
                                    <span style="font-size: 1.125rem;"><b>Water:</b>
                                        <br>
                                    </span>Last read:<br>
                                    <br>Current read:<br>
                                    <br>Taxes:<br>
                                    <br>Total Amount In EGP:<br>
                                </p>
                                <p class="u-text u-text-default u-text-12">{{ $facilities['elec'][0]->el }} kW</p>
                                <p class="u-text u-text-default u-text-13">{{ $facilities['elec'][0]->ec }} kW</p>
                                <p class="u-text u-text-default u-text-14">5%</p>
                                <p class="u-text u-text-default u-text-15" style="color: #D91212">{{ $facilities['elec_amount'] }} EGP</p><span
                                    class="u-file-icon u-icon u-icon-4"><img src="{{ asset('images/3835.png') }}"
                                        alt=""></span>
                                <p class="u-text u-text-default u-text-16">{{ $facilities['gas'][0]->gl }} kW</p>
                                <p class="u-text u-text-default u-text-17">{{ $facilities['gas'][0]->gc }} kW</p>
                                <p class="u-text u-text-default u-text-18">5%</p>
                                <p class="u-text u-text-default u-text-19" style="color: #D91212">{{ $facilities['gas_amount'] }} EGP
                                </p>
                                <span class="u-file-icon u-icon u-icon-5"><img src="{{ asset('images/702461.png') }}"
                                        alt=""></span>
                                <p class="u-text u-text-default u-text-20">{{ $facilities['water'][0]->wl }} KW</p>
                                <p class="u-text u-text-default u-text-21">{{ $facilities['water'][0]->wc }} KW</p>
                                <p class="u-text u-text-default u-text-22">5%</p>
                                <p class="u-text u-text-default u-text-23" style="color: #D91212">{{ $facilities['water_amount'] }} EGP</p>
                                <a href="{{ Route('citizen.apartment.payment') }}" data-page-id="645016483"
                                    class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-radius-28 u-btn-1">PAY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection
