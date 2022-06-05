@extends('layouts.app')

@section('title', 'Driving License')

@section('content')
    <a href="{{ Route('eGovernment') }}" data-page-id="92889271" style=" margin-left:23%"
        class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Back&nbsp;</a>
    @if ($age < 18)
        <section class="u-align-center u-clearfix u-section-1" id="sec-556b">

            <h2>Your Age Still less 18 Year's Old<h2>
                    <br><br><br><br><br><br>
        </section>
    @else
        <section class="u-align-center u-clearfix u-section-1" id="sec-556b">

            <div class="u-align-left u-clearfix u-sheet u-sheet-1">
                <div
                    class="u-border-2 u-border-grey-75 u-container-style u-grey-10 u-group u-radius-30 u-shape-round u-group-1">
                    <div class="u-container-layout u-container-layout-1">
                        <h6 class="u-text u-text-1"><b>El-Barcadero City Licence Card</b>
                        </h6>
                        <h6 class="u-text u-text-2"><b>Social Security Number</b>
                        </h6>
                        @if (is_null(auth('citizen')->user()->avatar))
                            <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-1"
                                data-image-width="1280" data-image-height="1280"
                                style="background-image: url('{{ asset('images/AvatarMaker.png') }}')"></div>
                        @else
                            <div alt="" class="u-border-9 u-border-white u-image u-image-circle u-image-1"
                                data-image-width="1280" data-image-height="1280"
                                style="background-image: url('{{ asset('uploads/' . auth('citizen')->user()->avatar) }}')">
                            </div>
                        @endif
                        <h6 class="u-text u-text-default u-text-3"><b>{{ auth('citizen')->user()->id }}</b>
                        </h6>
                        <h6 class="u-text u-text-4"><b>{{ auth('citizen')->user()->fname }}
                                {{ auth('citizen')->user()->minit }}
                                {{ auth('citizen')->user()->lname }}</b>
                        </h6>
                        <h6 class="u-text u-text-5">
                            <b>
                                @if (!count($home))
                                    Complete Your Profile
                                @else
                                    {{ $home[0]->rname }} St. Building In: {{ $home[0]->bid }}, Home In
                                    :{{ $home[0]->home_id }}.
                                @endif
                            </b>
                        </h6>
                        <h6 class="u-text u-text-default u-text-6">
                            <b>
                                @if (auth('citizen')->user()->sex == '1')
                                    Male
                                @else
                                    Female
                                @endif
                            </b>
                        </h6>
                        <h6 class="u-text u-text-default u-text-7"><b>Egyptian</b>
                        </h6>
                        <h6 class="u-text u-text-default u-text-8">
                            <b>Job:
                                @if (count($job))
                                    {{ $job[0]->jtype }}
                                @elseif ($emp == 1)
                                    Employee in SmartCity
                                @else
                                    No Job
                                @endif
                            </b>
                        </h6>
                        <h6 class="u-text u-text-default u-text-9"><b>30/5/2022</b>
                        </h6>
                        <h6 class="u-text u-text-default u-text-10"><b>30/5/2028</b>
                        </h6>
                        <h6 class="u-text u-text-default u-text-11">Expiration Date</h6>
                        <img class="u-image u-image-default u-opacity u-opacity-20 u-preserve-proportions u-image-2"
                            {{-- src="{{ asset('images/kisspng-letter-computer-icons-letter-e-5abfa798001415.6134645015225097200004-14-53.png') }}" --}} alt="" data-image-width="512" data-image-height="512"><span
                            class="u-file-icon u-icon u-icon-1"><img src="{{ asset('images/635678.png') }}"
                                alt=""></span>
                        <h6 class="u-text u-text-12"><b>B</b>
                        </h6>
                        <h6 class="u-text u-text-default u-text-13">Date made</h6>
                    </div>
                </div>
                <h6 class="u-text u-text-14"><b>Your Licence-Card is Ready&nbsp;</b>
                </h6>
            </div>
        </section>
        <button style="margin-left: 47%"
            class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1"
            onclick="downlaod()">Save</button>
    @endif
    <script>
        function downlaod() {
            html2canvas(document.querySelector("#sec-556b")).then(function(canvas) {
                downloadImage(canvas.toDataURL(), "UsersInformation.png");

            });
        }

        function downloadImage(uri, filename) {
            var link = document.createElement('a');
            if (typeof link.download !== 'string') {
                window.open(uri);
            } else {
                link.href = uri;
                link.download = filename;
                accountForFirefox(clickLink, link);
            }
        }

        function clickLink(link) {
            link.click();
        }

        function accountForFirefox(click) {
            var link = arguments[1];
            document.body.appendChild(link);
            click(link);
            document.body.removeChild(link);
        }
    </script>
@endsection
