@extends('main_layouts.primary')

@section('title', 'Edit Data Patient')

@section('menu_title')
<!-- <i class="fab fa-accessible-icon fa-4x"></i> -->
<img src="{{ asset('assets/img/admin-removebg.png') }}" alt="">
<div class="main_greeting">
  <h1>Patient Management</h1>
  <p>Form Edit Data Patient</p>
</div>
@endsection

@section('content')
<section class="p-3 bg-mix">
  <div class="card">
    <div class="card-body">
      <form method="post" action="/patients/{{$patient->id}}">
        @method('patch')
        @csrf
        <div class="row">
          <div class="col-md-2">           
            <div class="form-group">
              <label for="id_patient">ID Patient</label>
              <input type="text" class="form-control @error('id_patient') is-invalid @enderror" placeholder="Insert ID" id="id_patient" name="id_patient" value="{{ $patient->id_patient }}">
              @error('id_patient')
              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-md-5">           
            <div class="form-group">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="Insert First Name" id="first_name" name="first_name" value="{{ $patient->first_name }}">
              @error('first_name')
              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-md-5">           
            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="Insert Last Name" id="last_name" name="last_name" value="{{ $patient->last_name }}">
              @error('last_name')
              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="address">Address</label>
              <textarea class="form-control @error('address') is-invalid @enderror" placeholder="Insert Your Address" id="address" name="address">{{ $patient->address }}</textarea>
              @error('address')
              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label for="placeofbirth">PlaceOfBirth</label>
              <input type="text" class="form-control @error('placeofbirth') is-invalid @enderror" placeholder="Place Of Birth" id="placeofbirth" name="placeofbirth" value="{{ $patient->placeofbirth }}">
              @error('placeofbirth')
              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="dateofbirth">DateOfBirth</label>
              <input type="date" class="form-control @error('dateofbirth') is-invalid @enderror" id="dateofbirth" name="dateofbirth" value="{{ $patient->dateofbirth }}">
              @error('dateofbirth')
              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="country">Country</label>
              <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ $patient->country }}">
              @error('country')
              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="job">Job</label>
              <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" name="job" value="{{ $patient->job }}">
              @error('job')
              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 ml-auto">
            <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i> Save Data</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col-md-12">
      <a href="/patients" class="card-link"><i class="fas fa-arrow-left mr-2"></i>Back</a>
    </div>
  </div>
</section>
@endsection