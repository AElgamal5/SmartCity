@extends('layouts.app')

@section('title', 'Certficate Of Birth')

@section('content')

    <a href="{{ Route('eGovernment') }}" data-page-id="92889271" style="margin-left: 23%"
        class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-20 u-btn-1">Back&nbsp;</a>
    @if (count($father) && count($mother))
        <section class="u-clearfix u-section-1" id="sec-5a0d">
            <div class="u-align-left u-clearfix u-sheet u-sheet-1">
                <div class="u-container-style u-grey-10 u-group u-group-1">
                    <div class="u-container-layout u-container-layout-1">
                        <h6 class="u-text u-text-default u-text-1"><b>El-Barcadero City</b>
                        </h6>
                        <h6 class="u-text u-text-default u-text-2">El-Barcadero Seal</h6>

                        <h6 class="u-text u-text-default u-text-3"><b>Certficate Of Birth</b>
                        </h6>
                        <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
                            <div class="u-layout" style="">
                                <div class="u-layout-col" style="">
                                    <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-2">
                                            <h6 class="u-text u-text-default u-text-4"><u>Baby information</u>
                                            </h6>
                                            <p class="u-text u-text-5"><b>{{ auth('citizen')->user()->fname }}</b></p>
                                            <p class="u-text u-text-6">Egyptian</p>
                                            <p class="u-text u-text-default u-text-7">
                                                @if (auth('citizen')->user()->sstatus == '1')
                                                    Maried
                                                @else
                                                    Single
                                                @endif
                                            </p>
                                            <p class="u-text u-text-default u-text-8">Nationality:</p>
                                            <p class="u-text u-text-default u-text-9">Soicial status:</p>
                                            <p class="u-text u-text-default u-text-10">
                                                @if (auth('citizen')->user()->sex == '1')
                                                    Male
                                                @else
                                                    Female
                                                @endif
                                            </p>
                                            <p class="u-text u-text-default u-text-11">Gender:</p>
                                            <p class="u-text u-text-default u-text-12">Smart City</p>
                                            <p class="u-text u-text-default u-text-13">Place of birth:</p>
                                            <p class="u-text u-text-14">{{ auth('citizen')->user()->bdate }}</p>
                                            <p class="u-text u-text-default u-text-15">{{ auth('citizen')->user()->id }}
                                            </p>
                                            <p class="u-text u-text-16">ID:</p>
                                            <p class="u-text u-text-17">Date of Birth</p>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-3">
                                            <h6 class="u-text u-text-default u-text-18"><u>Father Information</u>
                                            </h6>
                                            <p style="margin-left: 32%"><b>{{ $father[0]->fname }}
                                                    {{ $father[0]->minit }} {{ $father[0]->lname }}</b></p>
                                            <p class="u-text u-text-20">{{ $father[0]->id }}</p>
                                            <p class="u-text u-text-21">SSN:</p>
                                            <p class="u-text u-text-22">Egyptian</p>
                                            <p class="u-text u-text-23">Nationality:</p>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-4">
                                            <h6 class="u-text u-text-default u-text-24"><u>Mother information</u>
                                            </h6>
                                            <p style="margin-left: 32%"><b>{{ $mother[0]->fname }}
                                                    {{ $mother[0]->minit }} {{ $mother[0]->lname }}</b></p>
                                            <p class="u-text u-text-26">{{ $mother[0]->id }}</p>
                                            <p class="u-text u-text-27">SSN:</p>
                                            <p class="u-text u-text-28">Egyptian</p>
                                            <p class="u-text u-text-29">Nationality:</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <button style="margin-left: 47%"
            class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1"
            onclick="downlaod()">Save</button>
        <script>
            function downlaod() {
                html2canvas(document.querySelector("#sec-5a0d")).then(canvas => {
                    downloadImage(canvas.toDataURL());

                });
            }

            function downloadImage(uri) {
                var doc = new jspdf();
                doc.setFont("Arial");
                doc.setFontSize(11);
                doc.addImage(uri, "png", -20, 0, 250, 240);
                doc.save();
            }
        </script>
    @else
        <br><br><br>
        <h2 style="margin-left:23%">Your Birth Data Doesn't Ouccure in Our System</h2>
        <br><br><br><br><br><br><br><br>
    @endif

@endsection
