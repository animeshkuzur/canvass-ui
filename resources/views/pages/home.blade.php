@extends('layouts.master')

@section('style')
	<!--Custom Styles-->
	<link rel="stylesheet" type="text/css" href="#">
@endsection

@section('content')
	 <div class="landing-wrapper">
        <section class="landing-banner">
          <div class="container">
          @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                      <div class="login-button pull-right">
                        <a href="{{ url('/home') }}">Dashboard</a>
                      </div>
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                      <a href="#" data-toggle="modal" data-target="#loginModal">
                        <div class="login-button pull-right">
                          Login
                        </div>
                      </a>
                    @endif
                </div>
            @endif
            <div class="landing-banner-inner">
              <div class="banner-logo marginbottom-lg">
                <!-- <img src="{{ URL::asset('images/hcl-logo.svg')}}"> -->
                <h2 class="logo-text">Canvass</h2>
              </div>
              <div class="technocrats-search" id="technocratsSearch">
                <div class="input-group">
                  <input class="typeahead input" type="text" placeholder="Search a question">
                  <div class="input-group-btn">
                    <a class="search-button button btn btn-primary"><i class="ion-android-search"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

@endsection

@section('script')
	
@endsection