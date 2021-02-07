@extends('main_layouts.primary')

@section('title', 'Employees Management' )

@section('menu_title')
<!-- <i class="far fa-address-book fa-4x"></i> -->
<img src="{{ asset('assets/img/admin-removebg.png') }}" alt="">
<div class="main_greeting">
  <h1>Employees Management</h1>
  <p>List Employees Tables</p>
</div>
@endsection

@section('content')
<section class="p-3 bg-mix">
  <div class="row mb-2">
    <div class="col">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary my-2" data-toggle="modal" data-target="#staticBackdrop">
        <i class="fas fa-user-plus"></i> Add Employees
      </button>

      <!-- Add Employee Modal -->
      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title text-primary" id="staticBackdropLabel">Add Employee</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form method="post" action="/employees">
            @csrf
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Insert Username" name="username" value="{{ old('username') }}">
                    @error('username')
                    <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Insert password" name="password" value="{{ old('password') }}">
                    @error('password')
                    <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="Insert First Name" name="first_name" value="{{ old('first_name') }}">
                    @error('first_name')
                    <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control " id="last_name" placeholder="Insert Last Name" name="last_name" value="{{ old('last_name') }}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" placeholder="Insert Email Address" value="{{ old('email') }}">
                    @error('email')
                    <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="placeofbirth">Place Of Birth</label>
                    <input type="text" class="form-control @error('placeofbirth') is-invalid @enderror" id="placeofbirth" placeholder="Insert Place Of Birth" name="placeofbirth" value="{{ old('placeofbirth') }}">
                    @error('placeofbirth')
                    <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dateofbirth">Date Of Birth</label>
                    <input type="date" class="form-control @error('dateofbirth') is-invalid @enderror" id="dateofbirth" placeholder="Insert Date Of Birth" name="dateofbirth" value="{{ old('dateofbirth') }}">
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
                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Insert Your Address" name="address" >{{ old('address') }}</textarea>
                    @error('address')
                    <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" placeholder="Insert Your Company" name="company" value="{{ old('company') }}">
                    @error('company')
                    <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="job">Job</label>
                    <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" placeholder="Insert Your Job" name="job" value="{{ old('job') }}">
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
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i> Add Employees</button>
            </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="row mb-2">
    <div class="col-6 pt-2">
      <label>
        <span>Show</span> 
        <select aria-controls="form-control" class="shadow-sm rounded">
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
         <span>Entries</span>
       </label>
    </div>
    <div class="col-6 d-flex justify-content-end">
      <form action="/employees" method="get">
        <input class="srcButton form-control ml-auto shadow-sm rounded" type="search" id="search" placeholder="Search.." name="search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 d-none" type="submit" id="srcBtn">Search</button>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col">
      @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <span> {{ Session::get('success') }} </span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
    </div>
  </div>
  <div class="row ">
    <div class="col">
      <ul class="list-group shadow rounded">
        @foreach( $employees as $personaluser )
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $personaluser->first_name}} {{ $personaluser->last_name}}
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-around border-0">
                <a href="/employees/{{ $personaluser->id }}" class="badge badge-primary p-2" ><i class="fas fa-info-circle"></i> Detail</a>
                <a href="" class="badge badge-success p-2 ml-2" id="edit_employee" data-toggle="modal" data-target="#editModal" data-id="{{ $personaluser->id }}" data-iduser="{{ $personaluser->user_id }}" data-username="{{ $personaluser->username }}" data-password="{{ $personaluser->user->password }}" data-firstname="{{ $personaluser->first_name }}" data-lastname="{{ $personaluser->last_name }}" data-email="{{ $personaluser->user->email }}" data-placeofbirth="{{ $personaluser->placeofbirth }}" data-dateofbirth="{{ $personaluser->dateofbirth }}" data-address="{{ $personaluser->address }}" data-company="{{ $personaluser->company }}" data-job="{{ $personaluser->job }}" data-level="{{ $personaluser->user->level }}"><i class="fa fa-edit"></i> Edit</a>
                <!-- Modal Edit Dialog-->
                <div class="modal fade" id="editModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title text-primary" id="staticBackdropLabel">Edit Data Employee</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <form method="post" action="/employees/edit">
                      @csrf
                      <div class="modal-body">

                        <input type="hidden" id="id_employee" name="id_employee">
                        <input type="hidden" id="id_user" name="id_user">

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Insert Username" name="username" value="{{ old('username') }}">
                              @error('username')
                              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Insert password" name="password" value="{{ old('password') }}">
                              @error('password')
                              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="first_name">First Name</label>
                              <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="Insert First Name" name="first_name" value="{{ old('first_name') }}">
                              @error('first_name')
                              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="last_name">Last Name</label>
                              <input type="text" class="form-control " id="last_name" placeholder="Insert Last Name" name="last_name" value="{{ old('last_name') }}">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="email">Email address</label>
                              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" placeholder="Insert Email Address" value="{{ old('email') }}">
                              @error('email')
                              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="placeofbirth">Place Of Birth</label>
                              <input type="text" class="form-control @error('placeofbirth') is-invalid @enderror" id="placeofbirth" placeholder="Insert Place Of Birth" name="placeofbirth" value="{{ old('placeofbirth') }}">
                              @error('placeofbirth')
                              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="dateofbirth">Date Of Birth</label>
                              <input type="date" class="form-control @error('dateofbirth') is-invalid @enderror" id="dateofbirth" placeholder="Insert Date Of Birth" name="dateofbirth" value="{{ old('dateofbirth') }}">
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
                              <textarea class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Insert Your Address" name="address" >{{ old('address') }}</textarea>
                              @error('address')
                              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="company">Company</label>
                              <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" placeholder="Insert Your Company" name="company" value="{{ old('company') }}">
                              @error('company')
                              <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label for="job">Job</label>
                              <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" placeholder="Insert Your Job" name="job" value="{{ old('job') }}">
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
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                
                <a href="" class="badge badge-danger p-2 ml-2" id="drop_employee" data-toggle="modal" data-target="#dropModal" data-id="{{ $personaluser->id }}" data-user="{{ $personaluser->user_id }}"><i class="fas fa-trash"></i> Delete</a>
                <!-- Modal Delete Dialog-->
                <div class="modal fade" id="dropModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body d-flex justify-content-center">
                        <div class="text-dialog text-center text-danger">
                          <i class="fas fa-info-circle fa-7x"></i>

                          <h6 class="control-label mt-3">Are you sure want to delete this data ?</h6>
                          <!-- <p>{{ $personaluser->id }}</p> -->
                          <form action="/employees/delete" method="post" class="form_delete">
                          <!-- @method('delete') -->
                          @csrf
                            <input type="hidden" name="id" id="id_employee">
                            <input type="hidden" name="user_id" id="userId">
                            <button type="button" class="modal_close" data-dismiss="modal">No</button>
                            <button type="submit" class="modal_submit bg-danger">Yes</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

            </li>
          </ul>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <div class="row mt-2 ">
    <div class="col-md-6 d-flex justify-content-start">
      Showing {{ $employees->firstItem() }}
      to {{ $employees->lastItem() }}
      of {{ $employees->total() }} Entries
    </div>
    <div class="col-md-6 d-flex justify-content-end">
      {{ $employees->links() }}
    </div>
  </div>
</section>
@endsection

@section('script')
<script>
  var input = document.getElementById("search");
  input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
     event.preventDefault();
     document.getElementById("srcBtn").click();
    }
  });
</script>
@endsection