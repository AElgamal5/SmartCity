@extends('layouts.app')

@section('title', 'EL-Barcadero')

@section('content')

    <section class="u-clearfix u-image u-section-1" id="sec-84dd" data-image-width="1920" data-image-height="1080">
        <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-image u-shading u-section-2" id="sec-08a3" data-image-width="620" data-image-height="400">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1"><b>We Make It easy For You&nbsp;</b>
            </h3>
            <h3 class="u-text u-text-default u-text-2"><b>View All Services provided by Us</b>
            </h3>
            <a href="{{ Route('eGovernment') }}" data-page-id="84017226"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">View</a>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-3" src="" id="sec-f561" data-image-width="1280"
        data-image-height="853">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-default u-text-1">Another Services</h1>
            <p class="u-text u-text-2">WE deal with all of these services Remotely to share information about out citizens
            </p>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1"><span
                                class="u-file-icon u-icon u-icon-1"><img src="images/3209074.png" alt=""></span>
                            <h4 class="u-align-center u-text u-text-default u-text-3">Hospital&nbsp;<br>
                            </h4>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2"><span
                                class="u-file-icon u-icon u-icon-2"><img src="images/1080985.png" alt=""></span>
                            <h4 class="u-align-center u-text u-text-default u-text-4">School</h4>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3"><span
                                class="u-file-icon u-icon u-icon-3"><img src="images/1138048.png" alt=""></span>
                            <h4 class="u-align-center u-text u-text-default u-text-5">Police</h4>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4"><span
                                class="u-file-icon u-icon u-icon-4"><img src="images/2830284.png" alt=""></span>
                            <h4 class="u-align-center u-text u-text-default u-text-6">Bank</h4>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-5"><span
                                class="u-file-icon u-icon u-icon-5"><img src="images/2080179.png" alt=""></span>
                            <h4 class="u-align-center u-text u-text-default u-text-7">Mall</h4>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-6"><span
                                class="u-file-icon u-icon u-icon-6"><img src="images/2548670.png" alt=""></span>
                            <h4 class="u-align-center u-text u-text-default u-text-8">Farm</h4>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ Route('citizen.login') }}" data-page-id="1268318101"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">LOGIN</a>
        </div>
    </section>

    @include('incs.sticky')
@endsection
