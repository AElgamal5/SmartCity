@extends('layouts.app')

@section('title', 'ID Card')

@section('content')

    <a href="{{ Route('eGovernment') }}" data-page-id="92889271" style="margin-left: 10%"
        class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Back&nbsp;</a>
    <section class="u-align-center u-clearfix u-section-1" id="sec-556b">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <h6 class="u-text u-text-1"><b>Your Card is Ready&nbsp;</b>
            </h6>
            <div class="u-border-2 u-border-grey-75 u-container-style u-grey-10 u-group u-radius-50 u-shape-round u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <img class="u-image u-image-default u-opacity u-opacity-20 u-preserve-proportions u-image-1"
                        src="{{ asset('images/kisspng-letter-computer-icons-letter-e-5abfa798001415.6134645015225097200004-14-53.png') }}"
                        alt="" data-image-width="512" data-image-height="512">
                    <h6 class="u-text u-text-2"><b>El-Barcadero City IDentification Card</b>
                    </h6>
                    <h6 class="u-text u-text-default u-text-3"><b>{{ auth('citizen')->user()->fname }}</b>
                    </h6>
                    <h6 class="u-text u-text-default u-text-4">
                        <b>
                            @if (count($job))
                                {{ $job[0]->jtype }}
                            @elseif ($emp == 1)
                                Employee in SmartCity
                            @else
                                No Job
                            @endif
                        </b>
                    </h6>
                    <h6 class="u-text u-text-5">
                        <b>
                            @if (!count($home))
                                Complete Your Profile to get your ID card
                            @else
                                {{ $home[0]->rname }} St. B In: {{ $home[0]->bid }}, H In : {{ $home[0]->home_id }}.
                            @endif
                        </b>
                    </h6>
                    <h6 class="u-text u-text-default u-text-6"><b>{{ auth('citizen')->user()->bdate }}</b>
                    </h6>
                    <h6 class="u-text u-text-default u-text-7"><b>
                            @if (auth('citizen')->user()->sex == '1')
                                Male
                            @else
                                Female
                            @endif
                        </b>
                    </h6>
                    <h6 class="u-text u-text-default u-text-8"><b>{{ auth('citizen')->user()->minit }}
                            {{ auth('citizen')->user()->lname }}</b>
                    </h6>
                    @if (is_null(auth('citizen')->user()->avatar))
                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-2"
                            data-image-width="1280" data-image-height="1280"
                            style="background-image: url('{{ asset('images/AvatarMaker.png') }}')"></div>
                    @else
                        <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-2"
                            data-image-width="1280" data-image-height="1280"
                            style="background-image: url('{{ asset('uploads/' . auth('citizen')->user()->avatar) }}')">
                        </div>
                    @endif
                    <h6 class="u-text u-text-default u-text-9"><b>2025</b>
                    </h6>
                    <h6 class="u-text u-text-default u-text-10"><b>{{ auth('citizen')->user()->id }}</b>
                    </h6>
                    <h6 class="u-text u-text-default u-text-11">ADDRESS/ZIP</h6>
                    <h6 class="u-text u-text-default u-text-12">DATE OF BIRTH</h6>
                    <h6 class="u-text u-text-default u-text-13">Job</h6>
                    <h6 class="u-text u-text-default u-text-14">NAME</h6>
                    <h6 class="u-text u-text-default u-text-15">GENDER</h6>
                    <h6 class="u-text u-text-default u-text-16">EXPIRATION</h6>
                    <h6 class="u-text u-text-default u-text-17">SSN NO.</h6>
                </div>
            </div>
            {{-- <a href="{{ Route('pdf') }}"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">Print</a> --}}
        </div>
    </section>
    <button style="margin-left: 47%"
        class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1"
        onclick="downlaod()">Save</button>
    <script>
        function downlaod() {
            html2canvas(document.querySelector("#sec-556b")).then(canvas => {
                downloadImage(canvas.toDataURL());

            });
        }

        function downloadImage(uri) {
            var doc = new jspdf();
            doc.setFont("Arial");
            doc.setFontSize(11);
            doc.addImage(uri, "png", 0, 15, 230, 95);
            doc.save();
        }
    </script>
@endsection
