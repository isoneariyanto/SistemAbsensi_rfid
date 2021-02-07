@extends('main_layouts.primary')

@section('title', 'Add Data Employees' )

@section('menu_title')
<img src="{{ asset('assets/img/admin-removebg.png') }}" alt="">
<div class="main_greeting">
  <h1>Employees Management</h1>
  <p>Form Add Data Employee</p>
</div>
@endsection

@section('content')
<section class="p-3 bg-mix">
  <div class="card">
    <div class="card-body">
      <div class="row ">
        <div class="col">
          <form method="post" action="/employees">
          @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Input Username" name="username" value="{{ old('username') }}">
                  @error('username')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" placeholder="Input Email Address" value="{{ old('email') }}">
                  @error('email')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Input Password" name="password" value="{{ old('password') }}">
                  @error('password')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div> -->
            </div>

            <!-- <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" placeholder="Input Email Address" value="{{ old('email') }}">
                  @error('email')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div> -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="Input First Name" name="first_name" value="{{ old('first_name') }}">
                  @error('first_name')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control " id="last_name" placeholder="Input Last Name" name="last_name" value="{{ old('last_name') }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="placeofbirth">Place Of Birth</label>
                  <input type="text" class="form-control @error('placeofbirth') is-invalid @enderror" id="placeofbirth" placeholder="Input Place Of Birth" name="placeofbirth" value="{{ old('placeofbirth') }}">
                  @error('placeofbirth')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="dateofbirth">Date Of Birth</label>
                  <input type="date" class="form-control @error('dateofbirth') is-invalid @enderror" id="dateofbirth" placeholder="Input Date Of Birth" name="dateofbirth" value="{{ old('dateofbirth') }}">
                  @error('dateofbirth')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Input Your Address" name="address" >{{ old('address') }}</textarea>
                  @error('address')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="company">Company</label>
                  <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" placeholder="Input Your Company" name="company" value="{{ old('company') }}">
                  @error('company')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="job">Job</label>
                  <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" placeholder="Input Your Job" name="job" value="{{ old('job') }}">
                  @error('job')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="level">Level</label>
                    <select class="form-control" id="level" name="level">
                      <option>SuperAdmin</option>
                      <option>Admin</option>
                      <option>User</option>
                    </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 ml-auto">
                <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i> Add Staff</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection