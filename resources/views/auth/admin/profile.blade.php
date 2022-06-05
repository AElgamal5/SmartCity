@extends('layouts.app')

@section('title', 'Profile')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-6d94">
        <div class="u-clearfix u-sheet u-sheet-1">
            @if (is_null($admin[0]->avatar))
                <div alt="" class="u-border-9 u-border-palette-5-dark-3 u-image u-image-circle u-image-1"
                    data-image-width="1171" data-image-height="1280"
                    style="background-image: url('{{ asset('images/AvatarMaker.png') }}')"></div>
            @else
                <div alt="" class="u-border-9 u-border-palette-5-dark-3 u-image u-image-circle u-image-1"
                    data-image-width="1171" data-image-height="1280"
                    style="background-image: url('{{ asset('uploads/' . $admin[0]->avatar) }}')"></div>
            @endif
            <h6 class="u-align-center u-text u-text-default u-text-palette-1-base u-text-1">{{ $admin[0]->fname }}</h6>
            <p class="u-text u-text-2">
                <span style="font-size: 1.5rem;">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Basic Infromation:<br>
                    <br>&nbsp; &nbsp; &nbsp; &nbsp;Full Name:<br>
                    <br>&nbsp; &nbsp; &nbsp; &nbsp;Address:<br>
                    <br>&nbsp; &nbsp; &nbsp; &nbsp;E-mail Address:<br>
                    <br>&nbsp; &nbsp; &nbsp; &nbsp;SSN:<br>
                    <br>&nbsp; &nbsp; &nbsp; Gender:<br>
                    <br>&nbsp; &nbsp; &nbsp; Mobile Phone :<br>
                    <br>&nbsp; &nbsp; &nbsp; &nbsp;Social State:<br>
                    <br>&nbsp; &nbsp; &nbsp; &nbsp;Profession:<br>
                    <br>&nbsp; &nbsp; &nbsp; &nbsp;Password:
                </span>
                <br>
            </p>
            <p class="u-text u-text-3">{{ $admin[0]->fname }} {{ $admin[0]-> minit}} {{ $admin[0]->lname }}</p>
            <p class="u-text u-text-4">Address from database</p>
            <p class="u-text u-text-5">{{ $admin[0]->email }}</p>
            <p class="u-text u-text-6">
                @if($admin[0]->sex=='M')
                    Male
                @else
                    Female
                @endif
            </p>
            <p class="u-text u-text-7">
                @if($admin[0]->sex==0)
                    Single
                @else
                    Maried
                @endif
            </p>
            <p class="u-text u-text-8">job from database</p>
            <a href="{{ Route('admin.changePassword') }}" data-page-id="83396233"
                class="u-active-none u-border-2 u-border-palette-1-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-top-left-radius-0 u-top-right-radius-0 u-btn-1">Change
                Password</a>
            <p class="u-text u-text-9">+0{{ $admin[0]->phone }}</p>
            <p class="u-text u-text-10">{{ $admin[0]->id }}</p><span class="u-file-icon u-icon u-icon-1"><img src="{{ asset('images/108153.png') }}"
                    alt=""></span><span class="u-file-icon u-icon u-icon-2"><img src="{{ asset('images/1077114.png') }}"
                    alt=""></span><span class="u-file-icon u-icon u-icon-3"><img src="{{ asset('images/484167.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-4"><img src="{{ asset('images/646135.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-5"><img src="{{ asset('images/3239876.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-6"><img src="{{ asset('images/191.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-7"><img src="{{ asset('images/783886.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-8"><img src="{{ asset('images/3649405.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-9"><img src="{{ asset('images/2942842.png') }}" alt=""></span><span
                class="u-file-icon u-icon u-icon-10"><img src="{{ asset('images/159478.png') }}" alt=""></span>
        </div>
    </section>

@endsection
