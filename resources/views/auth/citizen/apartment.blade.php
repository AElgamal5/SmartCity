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
            <p class="u-text u-text-4"> Apartment NO.:<br>
                <br>NO. of Rooms:<br>
                <br>Apartment size in m²:
            </p>
            <p class="u-text u-text-5">3</p>
            <p class="u-text u-text-default u-text-6"><b>Apartment's Address:<br>
                    <br>Building NO.:<br>
                    <br>Floor NO.:<br></b>
                <br>
            </p>
            <p class="u-text u-text-7">{{ $home[0]->road_name }}</p>
            <p class="u-text u-text-8">{{ $home[0]->bid }}</p>
            <p class="u-text u-text-9">{{ $home[0]->rooms_no }}</p>
            <p class="u-text u-text-10">{{ $home[0]->floor_no }}</p>
            <p class="u-text u-text-11">{{ $home[0]->area }}</p><span class="u-file-icon u-icon u-icon-3"><img
                    src="{{ asset('images/125768.png') }}" alt=""></span>
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
            <div class="u-form u-form-1">
                <form action="#" method="POST" class="u-clearfix u-form-horizontal u-form-spacing-10 u-inner-form"
                    source="custom" name="form" style="padding: 10px;">


                    <div class="u-align-center u-form-group u-form-submit">
                        <a href="#"
                            class="u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-radius-21 u-btn-1">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then
                        try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                </form>
            </div><span class="u-file-icon u-icon u-icon-4"><img
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
                            <th class="u-border-1 u-border-black u-table-cell"><b>Action</b>
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
            <div class="u-form u-form-2">
                <form action="#" method="POST" class="u-clearfix u-form-horizontal u-form-spacing-10 u-inner-form"
                    source="custom" name="form" style="padding: 10px;">


                    <div class="u-align-center u-form-group u-form-submit">
                        <a href="#"
                            class="u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-radius-21 u-btn-2">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    {{-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then
                        try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse"> --}}
                </form>
            </div>
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
            <p class="u-text u-text-default u-text-9" style="margin-top: 1%; color:#D91212 ">
                {{ $facilities['elec_amount'] }} EGP</p>
            <p class="u-text u-text-default u-text-10" style="color: #D91212">{{ $facilities['water_amount'] }} EGP</p>
            <span class="u-file-icon u-icon u-icon-3"><img src="{{ asset('images/3835.png') }}" alt=""></span>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <colgroup>
                        <col width="13.3%">
                        <col width="34.2%">
                        <col width="52.5%">
                    </colgroup>
                    <thead class="u-grey-80 u-table-header u-table-header-1">
                        <tr style="height: 82px;">
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Bill</b>
                            </th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Payment Status(Paid/NotPaid)</b>
                                <br>
                            </th>
                            <th class="u-border-1 u-border-grey-dark-1 u-table-cell"><b>Action</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="u-table-body u-white u-table-body-1">
                        <tr style="height: 75px;">
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-4">Electric</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-5">Paid</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-6">
                                {{-- <div id="paypal-button-container"></div> --}}
                                <form action="{{ url('/citizen/apartment/charge') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="text" name="type" value="elec" style="display: none">
                                    <input type="submit" name="submit" value="Pay Now"
                                        class="u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-radius-21"
                                        style="margin-left: 110px">
                                </form>
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-7">Gas</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-8">NotPaid</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-9">
                                {{-- <div id="paypal-button-container1"></div> --}}
                                <form action="{{ url('/citizen/apartment/charge') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="text" name="type" value="gas" style="display: none">
                                    <input type="submit" name="submit" value="Pay Now"
                                        class="u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-radius-21"
                                        style="margin-left: 110px">
                                </form>
                            </td>
                        </tr>
                        <tr style="height: 75px;">
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-10">Water</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-11">Paid</td>
                            <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-12">
                                {{-- <div id="paypal-button-container2"></div> --}}
                                <form action="{{ url('/citizen/apartment/charge') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="text" name="type" value="elec" style="display: none">
                                    <input type="submit" name="submit" value="Pay Now"
                                        class="u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-radius-21"
                                        style="margin-left: 110px">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="u-text u-text-default u-text-11" style="margin-top: -27% ">{{ $facilities['gas'][0]->gl }} kW</p>
            <p class="u-text u-text-default u-text-12">{{ $facilities['gas'][0]->gc }} kW</p>
            <p class="u-text u-text-default u-text-13">5%</p>
            <p class="u-text u-text-default u-text-14" style="margin-top: 2% ; color: #D91212">
                {{ $facilities['gas_amount'] }} EGP</p>
        </div>

    </section>
    {{-- men al qalb --}}
    {{-- <script>
        const fundingSources = [
            paypal.FUNDING.PAYPAL
        ]

        for (const fundingSource of fundingSources) {
            const paypalButtonsComponent = paypal.Buttons({
                fundingSource: fundingSource,

                // optional styling for buttons
                // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
                style: {
                    shape: 'rect',
                    height: 40,
                },

                // set up the transaction
                createOrder: (data, actions) => {
                    // pass in any options from the v2 orders create call:
                    // https://developer.paypal.com/api/orders/v2/#orders-create-request-body
                    const createOrderPayload = {
                        purchase_units: [{
                            amount: {
                                value: '{{ $facilities['elec_amount'] }}',
                            },
                        }, ],
                    }

                    return actions.order.create(createOrderPayload)
                },

                // finalize the transaction
                onApprove: (data, actions) => {
                    const captureOrderHandler = (details) => {
                        const payerName = details.payer.name.given_name
                        console.log('Transaction completed!')
                    }

                    return actions.order.capture().then(captureOrderHandler)
                },

                // handle unrecoverable errors
                onError: (err) => {
                    console.error(
                        'An error prevented the buyer from checking out with PayPal',
                    )
                },
            })

            if (paypalButtonsComponent.isEligible()) {
                paypalButtonsComponent
                    .render('#paypal-button-container')
                    .catch((err) => {
                        console.error('PayPal Buttons failed to render')
                    })
            } else {
                console.log('The funding source is ineligible')
            }
        }
        for (const fundingSource of fundingSources) {
            const paypalButtonsComponent = paypal.Buttons({
                fundingSource: fundingSource,

                // optional styling for buttons
                // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
                style: {
                    shape: 'rect',
                    height: 40,
                },

                // set up the transaction
                createOrder: (data, actions) => {
                    // pass in any options from the v2 orders create call:
                    // https://developer.paypal.com/api/orders/v2/#orders-create-request-body
                    const createOrderPayload = {
                        purchase_units: [{
                            amount: {
                                value: '{{ $facilities['gas_amount'] }}',
                            },
                        }, ],
                    }

                    return actions.order.create(createOrderPayload)
                },

                // finalize the transaction
                onApprove: (data, actions) => {
                    const captureOrderHandler = (details) => {
                        const payerName = details.payer.name.given_name
                        console.log('Transaction completed!')
                    }

                    return actions.order.capture().then(captureOrderHandler)
                },

                // handle unrecoverable errors
                onError: (err) => {
                    console.error(
                        'An error prevented the buyer from checking out with PayPal',
                    )
                },
            })

            if (paypalButtonsComponent.isEligible()) {
                paypalButtonsComponent
                    .render('#paypal-button-container1')
                    .catch((err) => {
                        console.error('PayPal Buttons failed to render')
                    })
            } else {
                console.log('The funding source is ineligible')
            }
        }
        for (const fundingSource of fundingSources) {
            const paypalButtonsComponent = paypal.Buttons({
                fundingSource: fundingSource,

                // optional styling for buttons
                // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
                style: {
                    shape: 'rect',
                    height: 40,
                },

                // set up the transaction
                createOrder: (data, actions) => {
                    // pass in any options from the v2 orders create call:
                    // https://developer.paypal.com/api/orders/v2/#orders-create-request-body
                    const createOrderPayload = {
                        purchase_units: [{
                            amount: {
                                value: '{{ $facilities['water_amount'] }}',
                            },
                        }, ],
                    }

                    return actions.order.create(createOrderPayload)
                },

                // finalize the transaction
                onApprove: (data, actions) => {
                    const captureOrderHandler = (details) => {
                        const payerName = details.payer.name.given_name
                        console.log('Transaction completed!')
                    }

                    return actions.order.capture().then(captureOrderHandler)
                },

                // handle unrecoverable errors
                onError: (err) => {
                    console.error(
                        'An error prevented the buyer from checking out with PayPal',
                    )
                },
            })

            if (paypalButtonsComponent.isEligible()) {
                paypalButtonsComponent
                    .render('#paypal-button-container2')
                    .catch((err) => {
                        console.error('PayPal Buttons failed to render')
                    })
            } else {
                console.log('The funding source is ineligible')
            }
        }
    </script> --}}
@endsection
