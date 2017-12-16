@extends('layouts.master')

@section('title')
    Main Page
@endsection

@section('content')
  <div>
      <img id="image" src="img/creation-lab.jpg" />
      <div class="col-sm-8 offset-sm-2" id="mid-block">
          <p id="mid-title">Welcome to Researchers' Profile<p>
      </div>
  </div> <!-- end of Upper Content -->

  <div class="main-content">
      <p class="main-content-title">Researchers' Profile</p>
      <p class="main-content-subtitle">Please enter your profile details <span class="required-fields">( * required fields )</span></p>

        <form class="col-md-8 col-sm-12" id="profile-form" method="POST" action="/researcher" enctype="multipart/form-data">  <!-- must have enctype for upload file -->
          {{csrf_field()}}

          <div class="row">
            <div class="form-group col-sm-6">
              @if (count($errors)>0)
                <label class="control-label">First Name *</label><span class="alert">{{$errors->first('firstName')}}</span>
                <input class="form-control" type="text" name="firstName" value="{{old('firstName')}}">
              @else
                <label class="control-label">First Name *</label>
                <input class="form-control" type="text" name="firstName" placeholder="First Name">
              @endif
            </div>
            <div class="form-group col-sm-6">
              @if (count($errors)>0)
                <label class="control-label">Last Name *</label><span class="alert">{{$errors->first('lastName')}}</span>
                <input class="form-control" type="text" name="lastName" value="{{old('lastName')}}">
              @else
                <label class="control-label">Last Name *</label>
                <input class="form-control" type="text" name="lastName" placeholder="Last Name">
              @endif
            </div>
          </div>

          <div class="row">
            <div class="form-group col-sm-6">
              @if (count($errors)>0)
                <label class="control-label">Position *</label><span class="alert">{{$errors->first('position')}}</span>
                <input class="form-control" type="text" name="position" value="{{old('position')}}">
              @else
                <label class="control-label">Position *</label>
                <input class="form-control" type="text" name="position" placeholder="Position">
              @endif
            </div>
            <div class="form-group col-sm-6">
              @if (count($errors)>0)
                <label class="control-label">Email *</label><span class="alert">{{$errors->first('email')}}</span>
                <input class="form-control" type="text" name="email" value="{{old('email')}}">
              @else
                <label class="control-label">Email *</label>
                <input class="form-control" type="text" name="email" placeholder="name@example.com">
              @endif
            </div>
          </div>

          <div class="row">
            <div class="form-group col-sm-12">
              @if (count($errors)>0)
                <label class="control-label">Biography *</label><span class="alert">{{$errors->first('biography')}}</span>
                <textarea class="form-control" name="biography" rows="5"> {{old('biography')}} </textarea>
              @else
                <label class="control-label">Biography *</label>
                <textarea class="form-control" name="biography" rows="5" placeholder="something about yourself"></textarea>
              @endif
            </div>
          </div>

          <div class="row">
            <div class="form-group col-sm-12">
              @if (count($errors)>0)
                <label class="control-label">Profile Image</label><span class="alert">{{$errors->first('image')}}</span>
                <input type="file" name="image" class="form-control-file" id="file-upload" value="{{old('image')}}">
              @else
                <label class="control-label">Profile Image</label>
                <input type="file" name="image" class="form-control-file" id="file-upload">
              @endif
            </div>
          </div>

          <div class="row">
            <div class="form-group col-sm-6">
              <button class="btn btn-success btn-lg col-md-12">Submit</button>
              <!-- <button class="btn btn-success btn-lg offset-md-1 col-md-4 offset-sm-1 col-sm-10 ">Submit</button> -->
            </div>
            <div class="form-group col-sm-6">
              <a class="btn btn-secondary btn-lg col-md-12" href="/">Cancel</a>
              <!-- <a class="btn btn-secondary btn-lg col-md-4 offset-sm-1 col-sm-10  btn-top" href="/">Cancel</a> -->
            </div>
          </div>
        </form>
  </div>
@endsection
