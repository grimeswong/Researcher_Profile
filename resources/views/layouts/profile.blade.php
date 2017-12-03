@extends('layouts.master')

@section('title')
    Profile Page
@endsection

@section('content')
  <div>
      <img id="image" src="img/uq.jpg" />
      <div class="col-sm-8 offset-sm-2" id="mid-block">
          <p id="mid-title">Welcome to UQ Researcher Site<p>
      </div>
  </div> <!-- end of Upper Content -->

  <div class="main-content">
      <p class="main-content-title">Researcher Profile</p>

      <div class="row">
        <div class="offset-md-2 col-md-8 col-sm-12">
            <div class="profile-block">
              <div class="row">
                <div class="col-md-3">
                  <img class="profile-image" src="/img/grimes.jpg" alt="profile image">
                </div>
                <div class="col-md-9">
                  <div class="row row-space big-name">
                      {{$firstname}} {{$lastname}}
                  </div>
                  <div class="row row-space">
                      {{$position}} | {{$email}}
                  </div>
                  <div class="row row-space">
                      Biography
                  </div>
                  <div class="row row-message">
                      {{$biography}}
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
  </div>
@endsection
