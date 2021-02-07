@extends('main_layouts.primary')

@section('title', 'Drags' )

@section('menu_title')
<!-- <i class="fab fa-accessible-icon fa-4x"></i> -->
<img src="{{ asset('assets/img/admin-removebg.png') }}" alt="">
<div class="main_greeting">
  <h1>Drags</h1>
  <p>Drags List</p>
</div>
@endsection

@section('content')
<section class="p-3 bg-mix">

  @if(auth()->user()->level == "Admin")
    <div class="row mb-2">
      <div class="col">
        <a href="{{ url('/patients/create') }}" class="btn btn-primary my-2"><i class="fas fa-user-plus"></i> Add Drag</a>
      </div>
    </div>
  @endif
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
    <div class="col-6">
      <input type="search" name="search" placeholder="Search.." class="srcButton form-control ml-auto shadow-sm rounded" aria-label="Search">
    </div>
  </div>
  <div class="row ">
    <div class="col">
      <ul class="list-group shadow rounded">
        @foreach( $patients as $pat )
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $pat->first_name}} {{ $pat->last_name}}

          @if(auth()->user()->level == "Admin")
            <a href="/patients/{{ $pat->id_patient }}" class="badge badge-primary" >detail</a>
          @endif
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <div class="row mt-2 ">
    <div class="col-md-6 d-flex justify-content-start">
      Showing {{ $patients->firstItem() }}
      to {{ $patients->lastItem() }}
      of {{ $patients->total() }} Entries
    </div>
    <div class="col-md-6 d-flex justify-content-end">
      {{ $patients->links() }}
    </div>
  </div>
</section>
@endsection