@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <section class="u-clearfix u-section-2" id="sec-b434">
        <div class="u-clearfix u-sheet u-sheet-1">
            @if (is_null(auth('citizen')->user()->avatar))
                <div alt="" class="u-border-9 u-border-palette-5-dark-3 u-image u-image-circle u-image-1"
                    data-image-width="1280" data-image-height="1280"
                    style="background-image: url('{{ asset('images/AvatarMaker.png') }}')">
                </div>
            @else
                <div alt="" class="u-border-9 u-border-palette-5-dark-3 u-image u-image-circle u-image-1"
                    data-image-width="1280" data-image-height="1280"
                    style="background-image: url('{{ asset('uploads/' . auth('citizen')->user()->avatar) }}')">
                </div>
            @endif
            <h6 class="u-align-center u-text u-text-default u-text-palette-1-base u-text-1">
                {{ auth('citizen')->user()->fname }} {{ auth('citizen')->user()->lname }}</h6><span
                class="u-file-icon u-icon u-icon-1"><img src="{{ asset('images/108153.png') }}" alt=""></span>
            <p class="u-text u-text-2">&nbsp;&nbsp;<span style="font-size: 1.25rem;"> &nbsp; &nbsp; &nbsp;&nbsp;<span
                        style="font-size: 1.5rem;">Basic Infromation:</span>
                </span>
                <span style="font-size: 1.5rem;">
                    <br>
                </span>
                <br>&nbsp; &nbsp; &nbsp; &nbsp;Full Name:<br>
                <br>&nbsp; &nbsp; &nbsp; &nbsp;Address:<br>
                <br>&nbsp; &nbsp; &nbsp; &nbsp;E-mail Address:<br>
                <br>&nbsp; &nbsp; &nbsp; &nbsp;SSN:<br>
                <br>&nbsp; &nbsp; &nbsp; Gender:<br>
                <br>&nbsp; &nbsp; &nbsp; Mobile Phone :<br>
                <br>&nbsp; &nbsp; &nbsp; &nbsp;Social State:<br>
                <br>&nbsp; &nbsp; &nbsp; &nbsp;Profession:<br>
                <br>&nbsp; &nbsp; &nbsp; &nbsp;Password:<br>
            </p><span class="u-file-icon u-icon u-icon-2"><img src="{{ asset('images/646135.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-3"><img src="{{ asset('images/3649405.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-4"><img src="{{ asset('images/2942842.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-5"><img src="{{ asset('images/484167.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-6"><img src="{{ asset('images/3239876.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-7"><img src="{{ asset('images/191.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-8"><img src="{{ asset('images/1077114.png') }}" alt=""></span>
            <p class="u-text u-text-3">{{ auth('citizen')->user()->fname }} {{ auth('citizen')->user()->minit }}
                {{ auth('citizen')->user()->lname }}</p>
            <p class="u-text u-text-4">
                @if (!count($home))
                    Complete Your Profile
                @else
                    {{ $home[0]->rname }} St. B In: {{ $home[0]->bid }}, H In : {{ $home[0]->home_id }}.
                @endif
            </p>
            <p class="u-text u-text-5">
                @if (is_null(auth('citizen')->user()->email))
                    Has no Email
                @else
                    {{ auth('citizen')->user()->email }}
                @endif
            </p>
            <p class="u-text u-text-6">{{ auth('citizen')->user()->id }}</p>
            <p class="u-text u-text-7">
                @if (auth('citizen')->user()->sex == '1')
                    <span>Male</span>
                @else
                    <span>Female</span>
                @endif
            </p>
            <p class="u-text u-text-8">
                @if (is_null(auth('citizen')->user()->phone))
                    Has no Phone
                @else
                    +120-{{ auth('citizen')->user()->phone }}
                @endif
            </p>
            <p class="u-text u-text-9">
                @if (auth('citizen')->user()->sstatus == 0)
                    <span>Single</span>
                @else
                    <span>Maried</span>
                @endif
            </p>
            <p class="u-text u-text-10">
                @if (count($job))
                    {{ $job[0]->jtype }}
                @elseif ($emp == 1)
                    Employee in SmartCity
                @else
                    Has No Job find one <a href="{{ Route('citizen.job') }}">Here</a>
                @endif
            </p><span class="u-file-icon u-icon u-icon-9"><img src="{{ asset('images/783886.png') }}" alt=""></span>
            <a href="{{ Route('citizen.changePassword') }}" data-page-id="83396233"
                class="u-active-none u-border-2 u-border-palette-1-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-top-left-radius-0 u-top-right-radius-0 u-btn-1">Change
                Password</a>
            <span class="u-file-icon u-icon u-icon-10">
                <img src="{{ asset('images/159478.png') }}" alt=""></span>
            <div class="u-expanded-width-xs u-form u-form-1">
                <form action="{{ Route('citizen.request') }}" method="POST"
                    class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px;">
                    @csrf
                    <div class="u-form-group u-form-select u-form-group-1">
                        <label for="select-4a48" class="u-label">Select</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-4a48" name="selected_modify"
                                class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                <option value="">Select</option>
                                <option value="Children">Children</option>
                                <option value="Wife">Wife</option>
                                <option value="Appartments">Appartments</option>
                                <option value="Cars">Cars</option>
                                <option value="Other">Other</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1"
                                class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="u-form-group u-form-textarea u-form-group-2">
                        <label for="textarea-84a9" class="u-label">Details</label>
                        <textarea rows="4" cols="50" id="textarea-84a9" name="details"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"
                            required=""></textarea>
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                        <button type="submit"
                            class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-19 u-btn-2">Submit</button>
                        {{-- <a href="#"
                            class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-19 u-btn-2">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden"> --}}
                    </div>
                    {{-- <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                    <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then
                        try again.</div>
                    <input type="hidden" value="" name="recaptchaResponse"> --}}
                </form>
            </div>
            <h3 class="u-text u-text-11"><b>Request Modification </b>
            </h3>
            <div style="margin-top: 42%">
                <label> <i class="fa-solid fa-file-image"></i>&nbsp; Profile Photo : &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
                <a href="{{ Route('citizen.changePhoto') }}">Change</a>
            </div>
        </div>
    </section>

@endsection


{{-- <form action="#" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="avatar">Update Your photo</label>
    <input type="file" name="avatar" id="">
</form> --}}
