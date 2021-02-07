@extends('main_layouts.primary')

@section('title', 'Dashboard RPMS')

@section('menu_title') 
<img src="{{ asset('assets/img/admin-removebg.png') }}" alt="">
<div class="main_greeting">
	<h1>Hello {{ auth()->user()->name }}</h1>
	<p>Welcome to your {{ Str::lower(auth()->user()->level) }} dashboard</p>
</div>
@endsection

@section('content')
<div class="main_cards">

	<div class="card">
		<i class="fas fa-users fa-3x text-primary"></i>
		<div class="card_inner">
			<p class="text-primary-p">Number of Staff</p>
			<span class="font-bold text-title">{{ $puCount }}</span>
		</div>
	</div>
	<div class="card">
		<i class="fas fa-user-injured fa-3x text-danger"></i>
		<div class="card_inner">
			<p class="text-primary-p">Number of Patient</p>
			<span class="font-bold text-title">{{ $patCount }}</span>
		</div>
	</div>
	<div class="card">
		<i class="fas fa-pills fa-3x text-warning"></i>
		<div class="card_inner">
			<p class="text-primary-p">Stock of Medicine</p>
			<span class="font-bold text-title">1088</span>
		</div>
	</div>
	<div class="card">
		<i class="fas fa-wave-square fa-3x text-success"></i>
		<div class="card_inner">
			<p class="text-primary-p">Number of Sensor Data </p>
			<span class="font-bold text-title">{{$censor}}</span>
		</div>
	</div>
</div>
<div class="charts">
	<div class="row mb-3">
		<div class="col-lg-12">
			<div class="chart1">
				<div class="card">
				  <div class="card-header">
				    <h5 class="card-title text-darkblue">Censor Graph</h5>
				    <h6 class="card-subtitle mb-2 text-muted">Real-time heartbeat & temperature data</h6>
				  </div>
				  <div id="censorChart" class="heartbeat_charts"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="tables">
	<div class="row mb-3">
		<div class="col-lg-6 mb-3">
			<div class="card">
			  <div class="card-header">
			    <h5 class="card-title text-darkblue">Patients List</h5>
			    <h6 class="card-subtitle mb-2 text-muted">All Patient</h6>
			  </div>
			  <div class="card-body">
			    <ul class="list-group">
			      @foreach( $pat as $patient )
			      <li class="list-group-item d-flex justify-content-between align-items-center">
			        {{ $patient->first_name}} {{ $patient->last_name}}
			        @if(auth()->user()->level == "Admin")
				        <a href="/patients/{{ $patient->id_patient }}" class="badge badge-primary" >detail</a>
			        @endif
			      </li>
			      @endforeach
			    </ul>
			  </div>
			</div>
		</div>
		<div class="col-lg-6 mb-3">
			<div class="card">
			  <div class="card-header">
			    <h5 class="card-title text-darkblue">Employees List</h5>
			    <h6 class="card-subtitle mb-2 text-muted">All Employee</h6>
			  </div>
			  <div class="card-body">
			    <ul class="list-group">
			      @foreach( $pu as $employee )
			      <li class="list-group-item d-flex justify-content-between align-items-center">
			        {{ $employee->first_name}} {{ $employee->last_name}}
			        @if(auth()->user()->level == "Admin")
				        <a href="/employees/{{ $employee->id_staff }}" class="badge badge-primary" >detail</a>
			      	@endif
			      </li>
			      @endforeach
			    </ul>
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
  // Chart Options
  const options = {
    chart: {
    	height: 350,
		width: '100%',
		type: 'line',
		background: '#fff',
		foreColor: '#333'
    },
    series: [
		{
			name: 'Heartbeat',
			data: [<?php foreach( $heartbeat as $hb ){ echo '"' . $hb->heartbeat . '",'; } ?>]
		},
		{
			name: 'Temperature',
			data: [<?php foreach( $temperature as $temp ){ echo '"' . $temp->temperature . '",'; } ?>]
		}
    ],
    xaxis: {
      categories: [<?php foreach( $heartbeat as $hb ){ echo '"' . $hb->created_at . '",'; } ?>]
    }
  };

  // init chart
  const chart = new ApexCharts(document.querySelector('#censorChart'), options);

  // Render chart
  chart.render();
</script>
@endsection