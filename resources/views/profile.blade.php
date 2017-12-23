@extends('layouts.master')

@section('title')
    Profile Page
@endsection

@section('content')
  <div>
      <img id="image" src="img/creation-lab.jpg" />
      <div class="col-sm-8 offset-sm-2" id="mid-block">
          <p id="mid-title">Welcome to Researchers' Profile<p>
      </div>
  </div> <!-- end of Upper Content -->

  <!-- Main content -->
  <div class="main-content" id="main-content"> <!-- don't delete id of "main-content" that for anchor -->
      <p class="main-content-title">Researchers' Profile</p>


      <!-- Profile block -->
      <div class="col-md-8 col-xs-12">  <!-- 66% for bigger screen, fullwidth for mobile -->
          <div class="profile-block">
            <div class="row">

              <!-- Left column -->
              <div class="col-md-4 col-xs-6">
                <img class="profile-image" src="{{$image}}" alt="{{$firstname}} profile image">
              </div>
              <!-- Right column -->

              <div class="content-wrap col-md-8 col-xs-6">
                <div class="big-name">
                    {{$firstname}} {{$lastname}}
                </div>
                <div>
                    {{$position}}
                    <span class="separator">|</span>
                    <span class="email">{{$email}}</span>
                </div>
                <div class="bio-title">
                    Biography
                </div>
                <div class="bio-message">
                    {{$biography}}
                </div>
              </div>
            </div>
        </div>
      </div>

  </div> <!-- end main content -->
@endsection
