@extends('layouts.app')

@section('title', 'Employee Login')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-8646">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img class="u-image u-image-default u-preserve-proportions u-image-1"
                src="{{ asset('images/kisspng-letter-computer-icons-letter-e-5abfa798001415.6134645015225097200004.png') }}" alt=""
                data-image-width="512" data-image-height="512">
            <h4 class="u-text u-text-default u-text-1">
                <span class="u-text-custom-color-1"> L-</span>Barcadero
            </h4>
            <div class="u-expanded-width-xs u-form u-form-1">
                <form action="{{ route('employee.login.save') }}" method="POST"
                    name="form-1" class="u-clearfix u-form-spacing-10 u-inner-form"
                    style="padding: 10px;">
                    @csrf
                    <div class="u-form-group u-form-name">
                        <label for="number" class="u-label">Social Security number</label>
                        <input type="number" placeholder="Enter your SSN" id="name-48d8" name="citizen_id"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required autofocus>
                    </div>
                    <div class="u-form-email u-form-group">
                        <label for="password" class="u-label">Password</label>
                        <input type="password" placeholder="Enter Your Password" id="email-48d8" name="password"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
                    </div>
                    <div class="u-form-checkbox u-form-group u-form-group-3">
                        <input type="checkbox" name="remember"> <label for="remember">Remember Me</label>
                    </div>
                    <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-right-xs u-form-group u-form-submit">
                        {{-- <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">LOGIN</a> --}}
                        <button type="submit" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">login </button>
                    </div>
                    
                </form>
            </div>
            <a href="{{ Route('forgotPassword') }}"
                class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-custom-color-1 u-btn-2">Forgot
                Password?</a>
            <br><br><br><br>
        </div>
    </section>
    

@endsection
