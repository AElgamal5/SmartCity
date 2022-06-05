@extends('layouts.app')

@section('title', 'Employee Panel')

@section('content')

<section class="u-clearfix u-section-2" id="sec-1533">
    <div class="u-clearfix u-sheet u-sheet-1">
      @if (is_null($emp[0]->avatar))  
        <div alt="" class="u-border-9 u-border-palette-5-dark-3 u-image u-image-circle u-image-1" data-image-width="869" 
        data-image-height="1280" style="background-image: url('{{ asset('images/AvatarMaker.png') }}')"></div>
      @else
        <div alt="" class="u-border-9 u-border-palette-5-dark-3 u-image u-image-circle u-image-1" data-image-width="869" 
        data-image-height="1280" style="background-image: url('{{ asset('uploads/' . $emp[0]->avatar) }}')"></div>
      @endif
      <h6 class="u-align-center u-text u-text-default u-text-palette-1-base u-text-1">{{ $emp[0]->fname }}
        {{ $emp[0]->lname }}</h6>
      <a href="{{ Route('employee.profile') }}" data-page-id="1731510262" class="u-active-none u-border-2 u-border-palette-1-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1"><b>View Dashboard</b>
      </a>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-3" id="sec-b252">
    <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
      <div id="carousel-bd35" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1">
        <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
          <li data-u-target="#carousel-bd35" class="u-active u-grey-30" data-u-slide-to="0"></li>
          <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="1"></li>
          <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="2"></li>
          <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="3"></li>
          <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="4"></li>
          <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="5"></li>
          <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="6"></li>
          <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="7"></li>
          <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="8"></li>
          <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="9"></li>
          <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="10"></li>
        </ol>
        <div class="u-carousel-inner" role="listbox">
          <div class="u-active u-align-center u-carousel-item u-container-style u-image u-shading u-slide u-image-1" data-image-width="1280" data-image-height="1280">
            <div class="u-container-layout u-container-layout-1">
              <h2 class="u-text u-text-black u-text-default u-text-1">View Citizens</h2>
              <a href="{{ Route('employee.editCitizens') }}" data-page-id="184833867" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">View</a>
            </div>
            <style data-mode="XL" data-visited="true"></style>
            <style data-mode="LG"></style>
            <style data-mode="MD"></style>
            <style data-mode="SM"></style>
            <style data-mode="XS" data-visited="true"></style>
          </div>
          <div class="u-carousel-item u-container-style u-image u-slide u-image-3" data-image-width="1280" data-image-height="768">
            <div class="u-container-layout u-container-layout-3">
              <h2 class="u-align-center u-text u-text-3"><b>Citizen's care Panels</b></h2>
              <a href="{{ Route('employee.citizenCare') }}" data-page-id="668810255" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-3">View</a>
            </div>
          </div>
          <div class="u-align-left u-carousel-item u-container-style u-image u-shading u-slide u-image-2" data-image-width="1568" data-image-height="1000">
            <div class="u-container-layout u-container-layout-2">
              <h2 class="u-align-center u-text u-text-2">Citizens Modifications&nbsp;<br>Requests<br>
              </h2>
              <a href="{{ Route('employee.citizenRequests') }}" data-page-id="3070726023" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-2">View</a>
            </div>
            <style data-mode="XL" data-visited="true"></style>
            <style data-mode="LG"></style>
            <style data-mode="MD"></style>
            <style data-mode="SM"></style>
            <style data-mode="XS" data-visited="true"></style>
          </div>
          <div class="u-carousel-item u-container-style u-image u-slide u-image-4" data-image-width="1280" data-image-height="720">
            <div class="u-container-layout u-container-layout-4">
              <h2 class="u-align-center u-text u-text-white u-text-4">Bank's Accounts &amp;Transaction</h2>
              <a href="{{ Route('employee.bankPanel') }}" data-page-id="668810255" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-4">View</a>
            </div>
          </div>
          <div class="u-carousel-item u-container-style u-image u-slide u-image-5" data-image-width="1280" data-image-height="879">
            <div class="u-container-layout u-container-layout-5">
              <h2 class="u-align-center u-text u-text-5">Roads</h2>
              <a href="{{ Route('employee.roads') }}" data-page-id="668810255" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-5">View</a>
            </div>
          </div>
          <div class="u-carousel-item u-container-style u-image u-slide u-image-6" data-image-width="1280" data-image-height="853">
            <div class="u-container-layout u-container-layout-6">
              <h2 class="u-align-center u-text u-text-6">Lands</h2>
              <a href="{{ Route('employee.lands') }}" data-page-id="668810255" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-6">View</a>
            </div>
          </div>
          <div class="u-carousel-item u-container-style u-image u-slide u-image-7" data-image-width="1280" data-image-height="743">
            <div class="u-container-layout u-container-layout-7">
              <h2 class="u-align-center u-text u-text-7">Jobs</h2>
              <a href="{{ Route('employee.jobs') }}" data-page-id="668810255" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-7">View</a>
            </div>
          </div>
          <div class="u-carousel-item u-container-style u-image u-slide u-image-8" data-image-width="1280" data-image-height="853">
            <div class="u-container-layout u-container-layout-8">
              <h2 class="u-align-center u-text u-text-8">Buildings &amp;Homes</h2>
              <a href="{{ Route('employee.buildings') }}" data-page-id="668810255" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-8">View</a>
            </div>
          </div>
          <div class="u-carousel-item u-container-style u-image u-slide u-image-9" data-image-width="1280" data-image-height="854">
            <div class="u-container-layout u-container-layout-9">
              <h2 class="u-align-center u-text u-text-9">View Companies</h2>
              <a href="{{ Route('employee.companies') }}" data-page-id="668810255" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-9">View</a>
            </div>
          </div>
          <div class="u-align-left u-carousel-item u-container-style u-image u-shading u-slide u-image-12" data-image-width="1568" data-image-height="1000">
            <div class="u-container-layout u-container-layout-2">
              <h2 class="u-align-center u-text u-text-2" style="color: black"><b> Forgot Passwords</b><br>
              </h2>
              <a href="{{ Route('employee.forgetPasswords') }}" data-page-id="3070726023" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-2">View</a>
            </div>
            <style data-mode="XL" data-visited="true"></style>
            <style data-mode="LG"></style>
            <style data-mode="MD"></style>
            <style data-mode="SM"></style>
            <style data-mode="XS" data-visited="true"></style>
          </div>
          <div class="u-align-left u-carousel-item u-container-style u-image u-shading u-slide u-image-13" data-image-width="1568" data-image-height="1000">
            <div class="u-container-layout u-container-layout-2">
              <h2 class="u-align-center u-text u-text-2" style="color: black"><b> Citizen Compliments</b><br>
              </h2>
              <a href="{{ Route('employee.complaints') }}" data-page-id="3070726023" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-2">View</a>
            </div>
            <style data-mode="XL" data-visited="true"></style>
            <style data-mode="LG"></style>
            <style data-mode="MD"></style>
            <style data-mode="SM"></style>
            <style data-mode="XS" data-visited="true"></style>
          </div>
          <div class="u-align-left u-carousel-item u-container-style u-image u-shading u-slide u-image-14" data-image-width="1568" data-image-height="1000">
            <div class="u-container-layout u-container-layout-2">
              <h2 class="u-align-center u-text u-text-2" style="color: black"><b> Citizen Appointments</b><br>
              </h2>
              <a href="{{ Route('employee.appointments') }}" data-page-id="3070726023" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-2">View</a>
            </div>
            <style data-mode="XL" data-visited="true"></style>
            <style data-mode="LG"></style>
            <style data-mode="MD"></style>
            <style data-mode="SM"></style>
            <style data-mode="XS" data-visited="true"></style>
          </div>
          <div class="u-carousel-item u-container-style u-image u-slide u-image-10" data-image-width="1300" data-image-height="867">
            <div class="u-container-layout u-container-layout-10">
              <h2 class="u-align-center u-text u-text-white u-text-10">POLICE Requests LOG</h2>
              <a href="{{ Route('employee.sos') }}" data-page-id="138962519" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-10">View</a>
            </div>
          </div>
        </div>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-60 u-hidden-sm u-hidden-xs u-icon-circle u-spacing-9 u-carousel-control-1" href="#carousel-bd35" role="button" data-u-slide="prev">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                  c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
          <span class="sr-only">+Previous</span>
        </a>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-60 u-hidden-sm u-hidden-xs u-icon-circle u-spacing-9 u-carousel-control-2" href="#carousel-bd35" role="button" data-u-slide="next">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                  c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
          </span>
          <span class="sr-only">+Next</span>
        </a>
      </div>
    </div>
    <style data-mode="XXL">@media (max-width: 0px) {
.u-section-3 .u-sheet-1 {
  min-height: 613px;
}
.u-section-3 .u-slider-1 {
  width: 758px;
  min-height: 478px;
  height: auto;
  margin-top: 60px;
  margin-bottom: 60px;
  margin-left: auto;
  margin-right: auto;
}
.u-section-3 .u-carousel-indicators-1 {
  position: absolute;
  bottom: 10px;
  width: auto;
  height: auto;
}
.u-section-3 .u-image-1 {
  background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJkZWZhdWx0LWltYWdlLXNvbGlkIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDAwIDI2NSIgc3R5bGU9IndpZHRoOiA0MDBweDsgaGVpZ2h0OiAyNjVweDsiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyNjUiLz4NCjxwYXRoIGZpbGw9IiNEOUUzRTgiIGQ9Ik0zOTUuMyw5Ni4yYy01LTAuOC02LjEsMS4xLTguNSwyLjljLTEtMi4zLTIuNi02LjItNy43LTVjMS41LTUuMy0yLjYtOC40LTcuNy04LjRjLTAuNiwwLTEuMiwwLjEtMS44LDAuMg0KCWMtMS44LTQuMS02LTYuOS0xMC43LTYuOWMtNi41LDAtMTEuOCw1LjMtMTEuOCwxMS44YzAsMC40LDAsMC45LDAuMSwxLjNjLTEuMi0wLjgtMi41LTEuMy0zLjktMS4zYy00LjMsMC03LjksNC4yLTcuOSw5LjQNCgljMCwxLjIsMC4yLDIuNCwwLjYsMy41Yy0wLjUtMC4xLTEtMC4xLTEuNi0wLjFjLTYuOSwwLTEyLjUsNS41LTEyLjcsMTIuNGMtMC45LTAuMi0xLjktMC40LTIuOS0wLjRjLTYuNCwwLTExLjcsNS4yLTEyLjUsMTEuOA0KCWMtMS4yLTAuNC0yLjUtMC42LTMuOS0wLjZjLTUuOSwwLTEwLjgsMy44LTEyLjEsOC45Yy0yLjQtMi01LjUtMy4yLTguOS0zLjJjLTYsMC0xMS4xLDMuNy0xMi44LDguOGMtMS41LTEuNC0zLjgtMi4zLTYuMy0yLjMNCgljLTIuMSwwLTQuMSwwLjYtNS41LDEuN2gtMC4xYy0xLjMtNS41LTYuMi05LjUtMTIuMS05LjVjLTIuNCwwLTQuNywwLjctNi42LDEuOWMtMS40LTAuNy0zLTEuMi00LjgtMS4yYy0wLjMsMC0wLjUsMC0wLjgsMA0KCWMtMS41LTQuMS01LjItNy05LjUtN2MtMy4xLDAtNS45LDEuNS03LjgsMy45Yy0yLjItNC44LTYuOC04LjItMTIuMi04LjJjLTUuNiwwLTEwLjUsMy43LTEyLjUsOC44Yy0yLjEtMC45LTQuNC0xLjUtNi45LTEuNQ0KCWMtNi44LDAtMTIuNSwzLjktMTQuNSw5LjNjLTAuMiwwLTAuNSwwLTAuNywwYy01LjIsMC05LjYsMy4yLTExLjQsNy44Yy0yLjctMi44LTctNC41LTExLjgtNC41Yy0zLjMsMC02LjQsMC45LTguOSwyLjMNCgljLTIuMS02LjUtOC0xMi4yLTE4LjEtOS45Yy0yLjctMi4zLTYuMy0zLjctMTAuMS0zLjdjLTIuNSwwLTQuOCwwLjYtNi45LDEuNmMtMi4yLTUuOS03LjktMTAuMS0xNC42LTEwLjFjLTguNiwwLTE1LjYsNy0xNS42LDE1LjYNCgljMCwwLjksMC4xLDEuNywwLjIsMi41Yy0yLjYtNS03LjgtOC40LTEzLjgtOC40Yy04LjMsMC0xNS4xLDYuNS0xNS42LDE0LjZjLTIuOS0zLjItNy01LjMtMTEuNy01LjNjLTcuNCwwLTEzLjUsNS4xLTE1LjIsMTINCgljLTIuOS0zLjUtOS44LTYtMTQuNy02djExOS4yaDQwMFYxMDJDNDAwLDEwMiw0MDAsOTcsMzk1LjMsOTYuMnoiLz4NCjxwYXRoIGZpbGw9IiM4RUE4QkIiIGQ9Ik00MDAsMjA2LjJjMCwwLTI1LjMtMTkuMi0zMy42LTI1LjdjLTEzLjQtMTAuNi0yMy4xLTEyLjktMzEuNy03cy0yMy45LDE5LjctMjMuOSwxOS43cy01OC45LTYzLjktNjEuNS02Ni40DQoJYy0xLjUtMS40LTMuNi0xLjctNS41LTAuOWMtNS4yLDIuNC0xNy42LDkuNy0yNC41LDEyLjdjLTYuOSwyLjktNDEtNTAuNy00OS42LTUzcy04NC4zLDgzLjMtMTAxLjQsNzUuMXMtMjYuOS0yLjMtMzUuNCwzLjUNCgljLTguNiw1LjktMTEsNS45LTE1LjksOC4ycy0xNy4xLTUuOS0xNy4xLTUuOVYyNjVjMCwwLDQwMCwwLjIsNDAwLDB2LTU4LjhINDAweiIvPg0KPHBhdGggZmlsbD0iIzdFOTZBNiIgZD0iTTMzMy40LDE3OWMtMTMuMS05LjMtNDAsNC42LTU1LjEsMTAuN2MtMjMuNiw5LjYtOTQtNTQuNC0xMDcuMi01OS43YzAsMC00LjIsMy43LTkuNiw3LjYNCgljLTMuNS0wLjQtOC40LTUuNy05LjktNC43Yy00LjYsMy4xLTE3LjgsMTUuNC0yOC4zLDI2LjZjLTEwLjUsMTEuMy0xMS43LDAtMTUuOC0wLjZjLTIuNS0wLjQtNTQuMSw0Mi41LTU4LjcsNDMuMQ0KCUMyMi4zLDIwNS4zLDAsMTk3LjUsMCwxOTcuNVYyNjVsNDAwLTAuMXYtNTMuM0M0MDAsMjExLjYsMzQ0LjgsMTg3LjEsMzMzLjQsMTc5eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTAsMjY0Ljl2LTU4LjZjMCwwLDguMiwxLjgsMTEuMyw1LjNjMy4xLDMuNiwyNi4xLTQuMiwyNi4xLDQuN3MwLjUsNC4yLDAuNSwxNC44YzAsMTAuNywyMy00LjIsMzguMS0xOC40DQoJczM0LjktNDkuMiwzNi0zNWMxLDE0LjItMTUuMSwzOS4yLTI0LDU2LjRDNzkuMSwyNTEuNCw1MS43LDI2NSw1MS43LDI2NUwwLDI2NC45eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTEwMCwyNjVjMCwwLDY2LjctMTI1LjEsNjguMy0xMTYuOHMtNi44LDI5LjcsMi4xLDI2LjFjOC45LTMuNiwxNC42LTE2LDE4LjgtOS41czE2LjIsMzguNiwyMS45LDMzLjgNCgljNS43LTQuNywyMS40LTEzLjEsMjIuNC02LjVjMSw2LjUtMSw1LjMtNS43LDIwLjJDMjIzLjEsMjI3LjEsMjAwLDI2NSwyMDAsMjY1aC0xMGMwLDAsNi0yNC44LDguNi0zNC45YzIuNi0xMC4xLTMuNy0xOS0xMi04LjMNCglzLTIzLDIyLTI0LDE3LjhzLTUuNy0zMC4zLTE4LjgtMTQuMmMtMTMsMTYtMzMuOCwzOS43LTMzLjgsMzkuN2gtMTBWMjY1eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTI0NSwyNjVjMCwwLDE5LjgtNTQuNywzMy40LTY0LjJzNTMuNy0yNy45LDQ2LjktMTMuNmMtNi44LDE0LjItMTEsMzQuNC0yMC4zLDQ5LjgNCgljLTkuNCwxNS40LTE4LjgsMjYuMS0xNC4xLDEzLjZjNC43LTEyLjUsNi40LTIzLjMsMy43LTIzLjFDMjcxLjMsMjI5LjEsMjYwLDI2NSwyNjAsMjY1SDI0NXoiLz4NCjwvc3ZnPg0K");
  background-position: 50% 50%;
}
.u-section-3 .u-container-layout-1 {
  padding-top: 30px;
  padding-bottom: 30px;
  padding-left: 60px;
  padding-right: 60px;
}
.u-block-0056-32 {
  margin-top: 0;
  margin-bottom: 0;
  margin-left: auto;
  margin-right: auto;
}
.u-block-0056-33 {
  width: 409px;
  margin-top: 20px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 0;
}
.u-block-0056-34 {
  border-style: none;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 0.875rem;
  letter-spacing: 1px;
  background-image: none;
  margin-top: 30px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 0;
}
.u-section-3 .u-image-2 {
  background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJkZWZhdWx0LWltYWdlLXNvbGlkIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDAwIDI2NSIgc3R5bGU9IndpZHRoOiA0MDBweDsgaGVpZ2h0OiAyNjVweDsiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyNjUiLz4NCjxwYXRoIGZpbGw9IiNEOUUzRTgiIGQ9Ik0zOTUuMyw5Ni4yYy01LTAuOC02LjEsMS4xLTguNSwyLjljLTEtMi4zLTIuNi02LjItNy43LTVjMS41LTUuMy0yLjYtOC40LTcuNy04LjRjLTAuNiwwLTEuMiwwLjEtMS44LDAuMg0KCWMtMS44LTQuMS02LTYuOS0xMC43LTYuOWMtNi41LDAtMTEuOCw1LjMtMTEuOCwxMS44YzAsMC40LDAsMC45LDAuMSwxLjNjLTEuMi0wLjgtMi41LTEuMy0zLjktMS4zYy00LjMsMC03LjksNC4yLTcuOSw5LjQNCgljMCwxLjIsMC4yLDIuNCwwLjYsMy41Yy0wLjUtMC4xLTEtMC4xLTEuNi0wLjFjLTYuOSwwLTEyLjUsNS41LTEyLjcsMTIuNGMtMC45LTAuMi0xLjktMC40LTIuOS0wLjRjLTYuNCwwLTExLjcsNS4yLTEyLjUsMTEuOA0KCWMtMS4yLTAuNC0yLjUtMC42LTMuOS0wLjZjLTUuOSwwLTEwLjgsMy44LTEyLjEsOC45Yy0yLjQtMi01LjUtMy4yLTguOS0zLjJjLTYsMC0xMS4xLDMuNy0xMi44LDguOGMtMS41LTEuNC0zLjgtMi4zLTYuMy0yLjMNCgljLTIuMSwwLTQuMSwwLjYtNS41LDEuN2gtMC4xYy0xLjMtNS41LTYuMi05LjUtMTIuMS05LjVjLTIuNCwwLTQuNywwLjctNi42LDEuOWMtMS40LTAuNy0zLTEuMi00LjgtMS4yYy0wLjMsMC0wLjUsMC0wLjgsMA0KCWMtMS41LTQuMS01LjItNy05LjUtN2MtMy4xLDAtNS45LDEuNS03LjgsMy45Yy0yLjItNC44LTYuOC04LjItMTIuMi04LjJjLTUuNiwwLTEwLjUsMy43LTEyLjUsOC44Yy0yLjEtMC45LTQuNC0xLjUtNi45LTEuNQ0KCWMtNi44LDAtMTIuNSwzLjktMTQuNSw5LjNjLTAuMiwwLTAuNSwwLTAuNywwYy01LjIsMC05LjYsMy4yLTExLjQsNy44Yy0yLjctMi44LTctNC41LTExLjgtNC41Yy0zLjMsMC02LjQsMC45LTguOSwyLjMNCgljLTIuMS02LjUtOC0xMi4yLTE4LjEtOS45Yy0yLjctMi4zLTYuMy0zLjctMTAuMS0zLjdjLTIuNSwwLTQuOCwwLjYtNi45LDEuNmMtMi4yLTUuOS03LjktMTAuMS0xNC42LTEwLjFjLTguNiwwLTE1LjYsNy0xNS42LDE1LjYNCgljMCwwLjksMC4xLDEuNywwLjIsMi41Yy0yLjYtNS03LjgtOC40LTEzLjgtOC40Yy04LjMsMC0xNS4xLDYuNS0xNS42LDE0LjZjLTIuOS0zLjItNy01LjMtMTEuNy01LjNjLTcuNCwwLTEzLjUsNS4xLTE1LjIsMTINCgljLTIuOS0zLjUtOS44LTYtMTQuNy02djExOS4yaDQwMFYxMDJDNDAwLDEwMiw0MDAsOTcsMzk1LjMsOTYuMnoiLz4NCjxwYXRoIGZpbGw9IiM4RUE4QkIiIGQ9Ik00MDAsMjA2LjJjMCwwLTI1LjMtMTkuMi0zMy42LTI1LjdjLTEzLjQtMTAuNi0yMy4xLTEyLjktMzEuNy03cy0yMy45LDE5LjctMjMuOSwxOS43cy01OC45LTYzLjktNjEuNS02Ni40DQoJYy0xLjUtMS40LTMuNi0xLjctNS41LTAuOWMtNS4yLDIuNC0xNy42LDkuNy0yNC41LDEyLjdjLTYuOSwyLjktNDEtNTAuNy00OS42LTUzcy04NC4zLDgzLjMtMTAxLjQsNzUuMXMtMjYuOS0yLjMtMzUuNCwzLjUNCgljLTguNiw1LjktMTEsNS45LTE1LjksOC4ycy0xNy4xLTUuOS0xNy4xLTUuOVYyNjVjMCwwLDQwMCwwLjIsNDAwLDB2LTU4LjhINDAweiIvPg0KPHBhdGggZmlsbD0iIzdFOTZBNiIgZD0iTTMzMy40LDE3OWMtMTMuMS05LjMtNDAsNC42LTU1LjEsMTAuN2MtMjMuNiw5LjYtOTQtNTQuNC0xMDcuMi01OS43YzAsMC00LjIsMy43LTkuNiw3LjYNCgljLTMuNS0wLjQtOC40LTUuNy05LjktNC43Yy00LjYsMy4xLTE3LjgsMTUuNC0yOC4zLDI2LjZjLTEwLjUsMTEuMy0xMS43LDAtMTUuOC0wLjZjLTIuNS0wLjQtNTQuMSw0Mi41LTU4LjcsNDMuMQ0KCUMyMi4zLDIwNS4zLDAsMTk3LjUsMCwxOTcuNVYyNjVsNDAwLTAuMXYtNTMuM0M0MDAsMjExLjYsMzQ0LjgsMTg3LjEsMzMzLjQsMTc5eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTAsMjY0Ljl2LTU4LjZjMCwwLDguMiwxLjgsMTEuMyw1LjNjMy4xLDMuNiwyNi4xLTQuMiwyNi4xLDQuN3MwLjUsNC4yLDAuNSwxNC44YzAsMTAuNywyMy00LjIsMzguMS0xOC40DQoJczM0LjktNDkuMiwzNi0zNWMxLDE0LjItMTUuMSwzOS4yLTI0LDU2LjRDNzkuMSwyNTEuNCw1MS43LDI2NSw1MS43LDI2NUwwLDI2NC45eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTEwMCwyNjVjMCwwLDY2LjctMTI1LjEsNjguMy0xMTYuOHMtNi44LDI5LjcsMi4xLDI2LjFjOC45LTMuNiwxNC42LTE2LDE4LjgtOS41czE2LjIsMzguNiwyMS45LDMzLjgNCgljNS43LTQuNywyMS40LTEzLjEsMjIuNC02LjVjMSw2LjUtMSw1LjMtNS43LDIwLjJDMjIzLjEsMjI3LjEsMjAwLDI2NSwyMDAsMjY1aC0xMGMwLDAsNi0yNC44LDguNi0zNC45YzIuNi0xMC4xLTMuNy0xOS0xMi04LjMNCglzLTIzLDIyLTI0LDE3LjhzLTUuNy0zMC4zLTE4LjgtMTQuMmMtMTMsMTYtMzMuOCwzOS43LTMzLjgsMzkuN2gtMTBWMjY1eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTI0NSwyNjVjMCwwLDE5LjgtNTQuNywzMy40LTY0LjJzNTMuNy0yNy45LDQ2LjktMTMuNmMtNi44LDE0LjItMTEsMzQuNC0yMC4zLDQ5LjgNCgljLTkuNCwxNS40LTE4LjgsMjYuMS0xNC4xLDEzLjZjNC43LTEyLjUsNi40LTIzLjMsMy43LTIzLjFDMjcxLjMsMjI5LjEsMjYwLDI2NSwyNjAsMjY1SDI0NXoiLz4NCjwvc3ZnPg0K");
  background-position: 50% 50%;
}
.u-section-3 .u-container-layout-2 {
  padding-top: 30px;
  padding-bottom: 30px;
  padding-left: 60px;
  padding-right: 60px;
}
.u-block-0056-37 {
  margin-top: 0;
  margin-bottom: 0;
  margin-left: auto;
  margin-right: auto;
}
.u-block-0056-38 {
  width: 409px;
  margin-top: 20px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 0;
}
.u-block-0056-39 {
  border-style: none;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 0.875rem;
  letter-spacing: 1px;
  background-image: none;
  margin-top: 30px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 0;
}
.u-section-3 .u-carousel-control-1 {
  width: 38px;
  height: 38px;
  background-image: none;
  left: -58px;
  position: absolute;
  right: auto;
}
.u-section-3 .u-carousel-control-2 {
  width: 38px;
  height: 38px;
  background-image: none;
  left: auto;
  position: absolute;
  right: -58px;
}
}</style>
  </section>
  <section class="u-align-center u-clearfix u-section-4" id="sec-1b60">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-align-center u-text u-text-1">Facilities</h2>
      <div id="carousel-87a8" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1">
        <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
          <li data-u-target="#carousel-87a8" class="u-active u-grey-30" data-u-slide-to="0"></li>
          <li data-u-target="#carousel-87a8" class="u-grey-30" data-u-slide-to="1"></li>
          <li data-u-target="#carousel-87a8" class="u-grey-30" data-u-slide-to="2"></li>
          <li data-u-target="#carousel-87a8" class="u-grey-30" data-u-slide-to="3"></li>
          <li data-u-target="#carousel-87a8" class="u-grey-30" data-u-slide-to="4"></li>
        </ol>
        <div class="u-carousel-inner" role="listbox">
          <div class="u-active u-align-left u-carousel-item u-container-style u-image u-shading u-slide u-image-1" data-image-width="1280" data-image-height="853">
            <div class="u-container-layout u-container-layout-1">
              <h2 class="u-text u-text-default u-text-white u-text-2">Facility Of Water</h2>
              <a href="{{ Route('employee.water') }}" data-page-id="184833867" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-1">View</a>
            </div>
          </div>
          <div class="u-align-center u-carousel-item u-container-style u-image u-shading u-slide u-image-2" data-image-width="1280" data-image-height="720">
            <div class="u-container-layout u-container-layout-2">
              <h2 class="u-text u-text-default u-text-white u-text-3">Facility Of Electricity</h2>
              <a href="{{ Route('employee.electricity') }}" data-page-id="184833867" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-2">View</a>
            </div>
          </div>
          <div class="u-align-center u-carousel-item u-container-style u-image u-shading u-slide u-image-3" data-image-width="1280" data-image-height="853">
            <div class="u-container-layout u-container-layout-3">
              <h2 class="u-text u-text-default u-text-white u-text-4">Facility Of Gas</h2>
              <a href="{{ Route('employee.gas') }}" data-page-id="184833867" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-3">View</a>
            </div>
            <style data-mode="XL" data-visited="true"></style>
            <style data-mode="LG"></style>
            <style data-mode="MD"></style>
            <style data-mode="SM"></style>
            <style data-mode="XS"></style>
          </div>
          <div class="u-carousel-item u-container-style u-image u-slide u-image-4" data-image-width="150" data-image-height="99">
            <div class="u-container-layout u-container-layout-4">
              <h2 class="u-align-center u-text u-text-white u-text-5">Facility Of Cars</h2>
              <a href="{{ Route('employee.cars') }}" data-page-id="668810255" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-4">View</a>
            </div>
          </div>
          <div class="u-carousel-item u-container-style u-image u-slide u-image-5" data-image-width="1280" data-image-height="833">
            <div class="u-container-layout u-container-layout-5">
              <h2 class="u-align-center u-text u-text-6">Facility Of IOTs</h2>
              <a href="{{ Route('employee.iots') }}" data-page-id="668810255" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-1 u-radius-50 u-btn-5">View</a>
            </div>
          </div>
        </div>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-60 u-hidden-sm u-hidden-xs u-icon-circle u-spacing-9 u-carousel-control-1" href="#carousel-87a8" role="button" data-u-slide="prev">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                  c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
          <span class="sr-only">+Previous</span>
        </a>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-60 u-hidden-sm u-hidden-xs u-icon-circle u-spacing-9 u-carousel-control-2" href="#carousel-87a8" role="button" data-u-slide="next">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                  c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
          </span>
          <span class="sr-only">+Next</span>
        </a>
      </div>
    </div>
    <style data-mode="XXL">@media (max-width: 0px) {
.u-section-4 .u-sheet-1 {
  min-height: 613px;
}
.u-section-4 .u-slider-1 {
  width: 758px;
  min-height: 478px;
  height: auto;
  margin-top: 60px;
  margin-bottom: 60px;
  margin-left: auto;
  margin-right: auto;
}
.u-section-4 .u-carousel-indicators-1 {
  position: absolute;
  bottom: 10px;
  width: auto;
  height: auto;
}
.u-section-4 .u-image-1 {
  background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJkZWZhdWx0LWltYWdlLXNvbGlkIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDAwIDI2NSIgc3R5bGU9IndpZHRoOiA0MDBweDsgaGVpZ2h0OiAyNjVweDsiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyNjUiLz4NCjxwYXRoIGZpbGw9IiNEOUUzRTgiIGQ9Ik0zOTUuMyw5Ni4yYy01LTAuOC02LjEsMS4xLTguNSwyLjljLTEtMi4zLTIuNi02LjItNy43LTVjMS41LTUuMy0yLjYtOC40LTcuNy04LjRjLTAuNiwwLTEuMiwwLjEtMS44LDAuMg0KCWMtMS44LTQuMS02LTYuOS0xMC43LTYuOWMtNi41LDAtMTEuOCw1LjMtMTEuOCwxMS44YzAsMC40LDAsMC45LDAuMSwxLjNjLTEuMi0wLjgtMi41LTEuMy0zLjktMS4zYy00LjMsMC03LjksNC4yLTcuOSw5LjQNCgljMCwxLjIsMC4yLDIuNCwwLjYsMy41Yy0wLjUtMC4xLTEtMC4xLTEuNi0wLjFjLTYuOSwwLTEyLjUsNS41LTEyLjcsMTIuNGMtMC45LTAuMi0xLjktMC40LTIuOS0wLjRjLTYuNCwwLTExLjcsNS4yLTEyLjUsMTEuOA0KCWMtMS4yLTAuNC0yLjUtMC42LTMuOS0wLjZjLTUuOSwwLTEwLjgsMy44LTEyLjEsOC45Yy0yLjQtMi01LjUtMy4yLTguOS0zLjJjLTYsMC0xMS4xLDMuNy0xMi44LDguOGMtMS41LTEuNC0zLjgtMi4zLTYuMy0yLjMNCgljLTIuMSwwLTQuMSwwLjYtNS41LDEuN2gtMC4xYy0xLjMtNS41LTYuMi05LjUtMTIuMS05LjVjLTIuNCwwLTQuNywwLjctNi42LDEuOWMtMS40LTAuNy0zLTEuMi00LjgtMS4yYy0wLjMsMC0wLjUsMC0wLjgsMA0KCWMtMS41LTQuMS01LjItNy05LjUtN2MtMy4xLDAtNS45LDEuNS03LjgsMy45Yy0yLjItNC44LTYuOC04LjItMTIuMi04LjJjLTUuNiwwLTEwLjUsMy43LTEyLjUsOC44Yy0yLjEtMC45LTQuNC0xLjUtNi45LTEuNQ0KCWMtNi44LDAtMTIuNSwzLjktMTQuNSw5LjNjLTAuMiwwLTAuNSwwLTAuNywwYy01LjIsMC05LjYsMy4yLTExLjQsNy44Yy0yLjctMi44LTctNC41LTExLjgtNC41Yy0zLjMsMC02LjQsMC45LTguOSwyLjMNCgljLTIuMS02LjUtOC0xMi4yLTE4LjEtOS45Yy0yLjctMi4zLTYuMy0zLjctMTAuMS0zLjdjLTIuNSwwLTQuOCwwLjYtNi45LDEuNmMtMi4yLTUuOS03LjktMTAuMS0xNC42LTEwLjFjLTguNiwwLTE1LjYsNy0xNS42LDE1LjYNCgljMCwwLjksMC4xLDEuNywwLjIsMi41Yy0yLjYtNS03LjgtOC40LTEzLjgtOC40Yy04LjMsMC0xNS4xLDYuNS0xNS42LDE0LjZjLTIuOS0zLjItNy01LjMtMTEuNy01LjNjLTcuNCwwLTEzLjUsNS4xLTE1LjIsMTINCgljLTIuOS0zLjUtOS44LTYtMTQuNy02djExOS4yaDQwMFYxMDJDNDAwLDEwMiw0MDAsOTcsMzk1LjMsOTYuMnoiLz4NCjxwYXRoIGZpbGw9IiM4RUE4QkIiIGQ9Ik00MDAsMjA2LjJjMCwwLTI1LjMtMTkuMi0zMy42LTI1LjdjLTEzLjQtMTAuNi0yMy4xLTEyLjktMzEuNy03cy0yMy45LDE5LjctMjMuOSwxOS43cy01OC45LTYzLjktNjEuNS02Ni40DQoJYy0xLjUtMS40LTMuNi0xLjctNS41LTAuOWMtNS4yLDIuNC0xNy42LDkuNy0yNC41LDEyLjdjLTYuOSwyLjktNDEtNTAuNy00OS42LTUzcy04NC4zLDgzLjMtMTAxLjQsNzUuMXMtMjYuOS0yLjMtMzUuNCwzLjUNCgljLTguNiw1LjktMTEsNS45LTE1LjksOC4ycy0xNy4xLTUuOS0xNy4xLTUuOVYyNjVjMCwwLDQwMCwwLjIsNDAwLDB2LTU4LjhINDAweiIvPg0KPHBhdGggZmlsbD0iIzdFOTZBNiIgZD0iTTMzMy40LDE3OWMtMTMuMS05LjMtNDAsNC42LTU1LjEsMTAuN2MtMjMuNiw5LjYtOTQtNTQuNC0xMDcuMi01OS43YzAsMC00LjIsMy43LTkuNiw3LjYNCgljLTMuNS0wLjQtOC40LTUuNy05LjktNC43Yy00LjYsMy4xLTE3LjgsMTUuNC0yOC4zLDI2LjZjLTEwLjUsMTEuMy0xMS43LDAtMTUuOC0wLjZjLTIuNS0wLjQtNTQuMSw0Mi41LTU4LjcsNDMuMQ0KCUMyMi4zLDIwNS4zLDAsMTk3LjUsMCwxOTcuNVYyNjVsNDAwLTAuMXYtNTMuM0M0MDAsMjExLjYsMzQ0LjgsMTg3LjEsMzMzLjQsMTc5eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTAsMjY0Ljl2LTU4LjZjMCwwLDguMiwxLjgsMTEuMyw1LjNjMy4xLDMuNiwyNi4xLTQuMiwyNi4xLDQuN3MwLjUsNC4yLDAuNSwxNC44YzAsMTAuNywyMy00LjIsMzguMS0xOC40DQoJczM0LjktNDkuMiwzNi0zNWMxLDE0LjItMTUuMSwzOS4yLTI0LDU2LjRDNzkuMSwyNTEuNCw1MS43LDI2NSw1MS43LDI2NUwwLDI2NC45eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTEwMCwyNjVjMCwwLDY2LjctMTI1LjEsNjguMy0xMTYuOHMtNi44LDI5LjcsMi4xLDI2LjFjOC45LTMuNiwxNC42LTE2LDE4LjgtOS41czE2LjIsMzguNiwyMS45LDMzLjgNCgljNS43LTQuNywyMS40LTEzLjEsMjIuNC02LjVjMSw2LjUtMSw1LjMtNS43LDIwLjJDMjIzLjEsMjI3LjEsMjAwLDI2NSwyMDAsMjY1aC0xMGMwLDAsNi0yNC44LDguNi0zNC45YzIuNi0xMC4xLTMuNy0xOS0xMi04LjMNCglzLTIzLDIyLTI0LDE3LjhzLTUuNy0zMC4zLTE4LjgtMTQuMmMtMTMsMTYtMzMuOCwzOS43LTMzLjgsMzkuN2gtMTBWMjY1eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTI0NSwyNjVjMCwwLDE5LjgtNTQuNywzMy40LTY0LjJzNTMuNy0yNy45LDQ2LjktMTMuNmMtNi44LDE0LjItMTEsMzQuNC0yMC4zLDQ5LjgNCgljLTkuNCwxNS40LTE4LjgsMjYuMS0xNC4xLDEzLjZjNC43LTEyLjUsNi40LTIzLjMsMy43LTIzLjFDMjcxLjMsMjI5LjEsMjYwLDI2NSwyNjAsMjY1SDI0NXoiLz4NCjwvc3ZnPg0K");
  background-position: 50% 50%;
}
.u-section-4 .u-container-layout-1 {
  padding-top: 30px;
  padding-bottom: 30px;
  padding-left: 60px;
  padding-right: 60px;
}
.u-block-fc49-32 {
  margin-top: 0;
  margin-bottom: 0;
  margin-left: auto;
  margin-right: auto;
}
.u-block-fc49-33 {
  width: 409px;
  margin-top: 20px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 0;
}
.u-block-fc49-34 {
  border-style: none;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 0.875rem;
  letter-spacing: 1px;
  background-image: none;
  margin-top: 30px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 0;
}
.u-section-4 .u-image-2 {
  background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJkZWZhdWx0LWltYWdlLXNvbGlkIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDAwIDI2NSIgc3R5bGU9IndpZHRoOiA0MDBweDsgaGVpZ2h0OiAyNjVweDsiPg0KPHJlY3QgZmlsbD0iI0M2RDhFMSIgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyNjUiLz4NCjxwYXRoIGZpbGw9IiNEOUUzRTgiIGQ9Ik0zOTUuMyw5Ni4yYy01LTAuOC02LjEsMS4xLTguNSwyLjljLTEtMi4zLTIuNi02LjItNy43LTVjMS41LTUuMy0yLjYtOC40LTcuNy04LjRjLTAuNiwwLTEuMiwwLjEtMS44LDAuMg0KCWMtMS44LTQuMS02LTYuOS0xMC43LTYuOWMtNi41LDAtMTEuOCw1LjMtMTEuOCwxMS44YzAsMC40LDAsMC45LDAuMSwxLjNjLTEuMi0wLjgtMi41LTEuMy0zLjktMS4zYy00LjMsMC03LjksNC4yLTcuOSw5LjQNCgljMCwxLjIsMC4yLDIuNCwwLjYsMy41Yy0wLjUtMC4xLTEtMC4xLTEuNi0wLjFjLTYuOSwwLTEyLjUsNS41LTEyLjcsMTIuNGMtMC45LTAuMi0xLjktMC40LTIuOS0wLjRjLTYuNCwwLTExLjcsNS4yLTEyLjUsMTEuOA0KCWMtMS4yLTAuNC0yLjUtMC42LTMuOS0wLjZjLTUuOSwwLTEwLjgsMy44LTEyLjEsOC45Yy0yLjQtMi01LjUtMy4yLTguOS0zLjJjLTYsMC0xMS4xLDMuNy0xMi44LDguOGMtMS41LTEuNC0zLjgtMi4zLTYuMy0yLjMNCgljLTIuMSwwLTQuMSwwLjYtNS41LDEuN2gtMC4xYy0xLjMtNS41LTYuMi05LjUtMTIuMS05LjVjLTIuNCwwLTQuNywwLjctNi42LDEuOWMtMS40LTAuNy0zLTEuMi00LjgtMS4yYy0wLjMsMC0wLjUsMC0wLjgsMA0KCWMtMS41LTQuMS01LjItNy05LjUtN2MtMy4xLDAtNS45LDEuNS03LjgsMy45Yy0yLjItNC44LTYuOC04LjItMTIuMi04LjJjLTUuNiwwLTEwLjUsMy43LTEyLjUsOC44Yy0yLjEtMC45LTQuNC0xLjUtNi45LTEuNQ0KCWMtNi44LDAtMTIuNSwzLjktMTQuNSw5LjNjLTAuMiwwLTAuNSwwLTAuNywwYy01LjIsMC05LjYsMy4yLTExLjQsNy44Yy0yLjctMi44LTctNC41LTExLjgtNC41Yy0zLjMsMC02LjQsMC45LTguOSwyLjMNCgljLTIuMS02LjUtOC0xMi4yLTE4LjEtOS45Yy0yLjctMi4zLTYuMy0zLjctMTAuMS0zLjdjLTIuNSwwLTQuOCwwLjYtNi45LDEuNmMtMi4yLTUuOS03LjktMTAuMS0xNC42LTEwLjFjLTguNiwwLTE1LjYsNy0xNS42LDE1LjYNCgljMCwwLjksMC4xLDEuNywwLjIsMi41Yy0yLjYtNS03LjgtOC40LTEzLjgtOC40Yy04LjMsMC0xNS4xLDYuNS0xNS42LDE0LjZjLTIuOS0zLjItNy01LjMtMTEuNy01LjNjLTcuNCwwLTEzLjUsNS4xLTE1LjIsMTINCgljLTIuOS0zLjUtOS44LTYtMTQuNy02djExOS4yaDQwMFYxMDJDNDAwLDEwMiw0MDAsOTcsMzk1LjMsOTYuMnoiLz4NCjxwYXRoIGZpbGw9IiM4RUE4QkIiIGQ9Ik00MDAsMjA2LjJjMCwwLTI1LjMtMTkuMi0zMy42LTI1LjdjLTEzLjQtMTAuNi0yMy4xLTEyLjktMzEuNy03cy0yMy45LDE5LjctMjMuOSwxOS43cy01OC45LTYzLjktNjEuNS02Ni40DQoJYy0xLjUtMS40LTMuNi0xLjctNS41LTAuOWMtNS4yLDIuNC0xNy42LDkuNy0yNC41LDEyLjdjLTYuOSwyLjktNDEtNTAuNy00OS42LTUzcy04NC4zLDgzLjMtMTAxLjQsNzUuMXMtMjYuOS0yLjMtMzUuNCwzLjUNCgljLTguNiw1LjktMTEsNS45LTE1LjksOC4ycy0xNy4xLTUuOS0xNy4xLTUuOVYyNjVjMCwwLDQwMCwwLjIsNDAwLDB2LTU4LjhINDAweiIvPg0KPHBhdGggZmlsbD0iIzdFOTZBNiIgZD0iTTMzMy40LDE3OWMtMTMuMS05LjMtNDAsNC42LTU1LjEsMTAuN2MtMjMuNiw5LjYtOTQtNTQuNC0xMDcuMi01OS43YzAsMC00LjIsMy43LTkuNiw3LjYNCgljLTMuNS0wLjQtOC40LTUuNy05LjktNC43Yy00LjYsMy4xLTE3LjgsMTUuNC0yOC4zLDI2LjZjLTEwLjUsMTEuMy0xMS43LDAtMTUuOC0wLjZjLTIuNS0wLjQtNTQuMSw0Mi41LTU4LjcsNDMuMQ0KCUMyMi4zLDIwNS4zLDAsMTk3LjUsMCwxOTcuNVYyNjVsNDAwLTAuMXYtNTMuM0M0MDAsMjExLjYsMzQ0LjgsMTg3LjEsMzMzLjQsMTc5eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTAsMjY0Ljl2LTU4LjZjMCwwLDguMiwxLjgsMTEuMyw1LjNjMy4xLDMuNiwyNi4xLTQuMiwyNi4xLDQuN3MwLjUsNC4yLDAuNSwxNC44YzAsMTAuNywyMy00LjIsMzguMS0xOC40DQoJczM0LjktNDkuMiwzNi0zNWMxLDE0LjItMTUuMSwzOS4yLTI0LDU2LjRDNzkuMSwyNTEuNCw1MS43LDI2NSw1MS43LDI2NUwwLDI2NC45eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTEwMCwyNjVjMCwwLDY2LjctMTI1LjEsNjguMy0xMTYuOHMtNi44LDI5LjcsMi4xLDI2LjFjOC45LTMuNiwxNC42LTE2LDE4LjgtOS41czE2LjIsMzguNiwyMS45LDMzLjgNCgljNS43LTQuNywyMS40LTEzLjEsMjIuNC02LjVjMSw2LjUtMSw1LjMtNS43LDIwLjJDMjIzLjEsMjI3LjEsMjAwLDI2NSwyMDAsMjY1aC0xMGMwLDAsNi0yNC44LDguNi0zNC45YzIuNi0xMC4xLTMuNy0xOS0xMi04LjMNCglzLTIzLDIyLTI0LDE3LjhzLTUuNy0zMC4zLTE4LjgtMTQuMmMtMTMsMTYtMzMuOCwzOS43LTMzLjgsMzkuN2gtMTBWMjY1eiIvPg0KPHBhdGggZmlsbD0iIzc4OEY5RSIgZD0iTTI0NSwyNjVjMCwwLDE5LjgtNTQuNywzMy40LTY0LjJzNTMuNy0yNy45LDQ2LjktMTMuNmMtNi44LDE0LjItMTEsMzQuNC0yMC4zLDQ5LjgNCgljLTkuNCwxNS40LTE4LjgsMjYuMS0xNC4xLDEzLjZjNC43LTEyLjUsNi40LTIzLjMsMy43LTIzLjFDMjcxLjMsMjI5LjEsMjYwLDI2NSwyNjAsMjY1SDI0NXoiLz4NCjwvc3ZnPg0K");
  background-position: 50% 50%;
}
.u-section-4 .u-container-layout-2 {
  padding-top: 30px;
  padding-bottom: 30px;
  padding-left: 60px;
  padding-right: 60px;
}
.u-block-fc49-37 {
  margin-top: 0;
  margin-bottom: 0;
  margin-left: auto;
  margin-right: auto;
}
.u-block-fc49-38 {
  width: 409px;
  margin-top: 20px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 0;
}
.u-block-fc49-39 {
  border-style: none;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 0.875rem;
  letter-spacing: 1px;
  background-image: none;
  margin-top: 30px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 0;
}
.u-section-4 .u-carousel-control-1 {
  width: 38px;
  height: 38px;
  background-image: none;
  left: -58px;
  position: absolute;
  right: auto;
}
.u-section-4 .u-carousel-control-2 {
  width: 38px;
  height: 38px;
  background-image: none;
  left: auto;
  position: absolute;
  right: -58px;
}
}</style>
  </section>

@endsection