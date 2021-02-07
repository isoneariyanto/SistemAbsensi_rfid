@extends('main_layouts.primary')

@section('title', 'Edit Data Employee' )

@section('menu_title')
<img src="{{ asset('assets/img/admin-removebg.png') }}" alt="">
<div class="main_greeting">
  <h1>Employees Management</h1>
  <p>Form Edit Data Employees</p>
</div>
@endsection

@section('content')
<section class="p-3 bg-mix">
  <div class="card">
    <div class="card-body">
      <div class="row ">
        <div class="col">
          <form method="post" action="/employees/{{$employee->id}}">
          @method('patch')
          @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" value="{{ $employee->username }}">
                  @error('username')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pass">Password</label>
                  <input type="text" class="form-control @error('pass') is-invalid @enderror" id="pass" placeholder="Password" name="pass" value="{{ $employee->user->password }}">
                  @error('pass')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" placeholder="Email Address" value="{{ $employee->user->email }}">
                  @error('email')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="Insert Your First Name" name="first_name" value="{{ $employee->first_name }}">
                  @error('first_name')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control " id="last_name" placeholder="Insert Your Last Name" name="last_name" value="{{ $employee->last_name }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="placeofbirth">Place Of Birth</label>
                  <input type="text" class="form-control @error('placeofbirth') is-invalid @enderror" id="placeofbirth" placeholder="Place Of Birth" name="placeofbirth" value="{{ $employee->placeofbirth }}">
                  @error('placeofbirth')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="dateofbirth">Date Of Birth</label>
                  <input type="date" class="form-control @error('dateofbirth') is-invalid @enderror" id="dateofbirth" placeholder="Date Of Birth" name="dateofbirth" value="{{ $employee->dateofbirth }}">
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
                  <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Insert Your Address" name="address" value="{{ $employee->address }}">
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
                  <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" placeholder="Insert Your Company" name="company" value="{{ $employee->company }}">
                  @error('company')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="job">Job</label>
                  <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" placeholder="Insert Your Job" name="job" value="{{ $employee->job }}">
                  @error('job')
                  <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="level">Level</label>
                    <select class="form-control" id="level" name="level">
                    @if($employee->user->level == "SuperAdmin"){
                        <option>SuperAdmin</option>
                        <option>Admin</option>
                        <option>User</option>
                      }
                      @elseif($employee->user->level == "Admin"){
                        <option>Admin</option>
                        <option>SuperAdmin</option>
                        <option>User</option>
                      }
                      @elseif($employee->user->level == "User"){
                        <option>User</option>
                        <option>SuperAdmin</option>
                        <option>Admin</option>
                      }
                      @endif
                    </select>
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
    </div>
  </div>
</section>
@endsection