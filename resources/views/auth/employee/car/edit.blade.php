@extends('layouts.app')

@section('title', 'Edit Car')

@section('content')

    <section class="u-clearfix u-section-1" id="sec-6175">
        <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"></span>
            <h3 class="u-text u-text-default u-text-1"><b><u>Edit Car</u></b>
            </h3>
            <div class="u-expanded-width-xs u-form u-form-1">
                <form action="{{ Route('employee.editCar.save', $car[0]->car_id) }}" method="POST"
                    class="u-clearfix u-form-spacing-2 u-inner-form" style="padding: 8px;">
                    @csrf
                    <div class="u-clearfix u-group-elements u-group-elements-1"></div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Citizen SSN: </label>
                        <input type="text" placeholder="Enter Citizen SSN" id="address-28a4" name="owner_id"
                            value="{{ $car[0]->owner_id }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-name">
                        <label for="name-02f7" class="u-label">Car Name: </label>
                        <input type="text" placeholder="Enter Car Name" id="name-02f7" name="name"
                            value="{{ $car[0]->name }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Car Model: </label>
                        <input type="text" placeholder="Enter Car Model" id="address-28a4" name="model"
                            value="{{ $car[0]->model }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Car Color: </label>
                        <input type="text" placeholder="Enter Car Color" id="address-28a4" name="color"
                            value="{{ $car[0]->color }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Motor no.: </label>
                        <input type="text" placeholder="Enter Motor no." id="address-28a4" name="motor_number"
                            value="{{ $car[0]->motor_number }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Chasette no.: </label>
                        <input type="text" placeholder="Enter Chasette no." id="address-28a4" name="chasette_number"
                            value="{{ $car[0]->chasette_number }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Motor Capacity: </label>
                        <input type="text" placeholder="Enter Motor Capacity" id="address-28a4" name="motor_capacity"
                            value="{{ $car[0]->motor_capacity }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Cylinder no.: </label>
                        <input type="text" placeholder="Enter Cylinder no." id="address-28a4" name="cylinder_number"
                            value="{{ $car[0]->cylinder_number }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Fuel Tank: </label>
                        <input type="text" placeholder="Enter Fuel Tank" id="address-28a4" name="fuel_tank"
                            value="{{ $car[0]->fuel_tank }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Hourse Power: </label>
                        <input type="text" placeholder="Enter Hourse Power" id="address-28a4" name="hp"
                            value="{{ $car[0]->hp }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Number of seats: </label>
                        <input type="text" placeholder="Enter Number of seats" id="address-28a4" name="nos"
                            value="{{ $car[0]->nos }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-2">
                        <label for="address-28a4" class="u-label">Transmission type: </label>
                        <input type="text" placeholder="Enter Transmission type" id="address-28a4" name="tt"
                            value="{{ $car[0]->tt }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                        {{-- <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">ADD
                            Citizen<br>
                        </a> --}}
                        <button type="submit"
                            class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Save
                            Car</button>
                    </div>
                    {{-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then
                        try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse"> --}}
                </form>
            </div>
        </div>
    </section>

@endsection
