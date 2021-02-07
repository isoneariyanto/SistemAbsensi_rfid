@extends('main_layouts.primary')

@section('title', 'Detailed Patient Data')

@section('menu_title')
<!-- <i class="fab fa-accessible-icon fa-4x"></i> -->
<img src="{{ asset('assets/img/admin-removebg.png') }}" alt="">
<div class="main_greeting">
  <h1>Patient Management</h1>
  <p>Detailed Patient Data</p>
</div>
@endsection

@section('content')
<section class="p-3 bg-mix">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-2">           
          <div class="form-group">
            <label for="exampleInputEmail1">ID</label>
            <input type="text" class="form-control" value="{{ $patient->id_patient}}" readonly>
          </div>
        </div>
        <div class="col-md-5"> 
          <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control" value="{{ $patient->first_name}}" readonly>
          </div>
        </div>
        <div class="col-md-5"> 
          <div class="form-group">
            <label for="exampleInputEmail1">last Name</label>
            <input type="text" class="form-control" value="{{ $patient->last_name}}" readonly>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <textarea class="form-control" readonly>{{ $patient->address}}</textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <label for="exampleInputPassword1">PlaceOfBirth</label>
            <input type="text" class="form-control" value="{{ $patient->placeofbirth}}" readonly>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">DateOfBirth</label>
            <input type="text" class="form-control" value="{{ $patient->dateofbirth}}" readonly>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Country</label>
            <input type="text" class="form-control" value="{{ $patient->country}}" readonly>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Job</label>
            <input type="text" class="form-control" value="{{ $patient->job}}" readonly>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-end">
          <form action="{{ $patient->id }}" method="post">
            @method('delete')
            @csrf
            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
          </form>
          <a href="{{ $patient->id }}/edit" class="btn btn-success ml-1"><i class="fa fa-edit"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col-md-12">
      <a href="/patients" class="card-link"><i class="fas fa-arrow-left mr-2"></i>Back</a>
    </div>
  </div>
</section>
@endsection