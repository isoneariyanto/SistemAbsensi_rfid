<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name = "csrf-token" content = "{{ csrf_token() }}">
	<link rel="icon" type="image/png" href="{{ asset('assets/img/logo_rpms.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <title>@yield('title')</title>
  </head>
  <body>
  <!-- <input type="checkbox" id="check"> -->
  <div class="wrapper">
	<div id="sidebar">
		<div class="sidebar_header">
			<div class="sidebar_title">
				<!-- <img src="logo_rpms.png" alt=""> -->
				<h1 class="font-weight-bold">RPMS</h1>
	            <p class="lead text-muted">[Admin]</p>
			</div>
			<div class="sidebar_close">
				<i class="fas fa-times" id="sidebarIcon" onclick="closeSidebar()"></i>
			</div>
		</div>

		<div class="sidebar_menu">
			<div class="sidebar_link {{ Request::is('dashboard*') ? 'active' : '' }}">
				<i class="fab fa-accusoft"></i>
				<a href="{{ url('/dashboard')}}"><span>Dashboard</span></a>
			</div>
				<h2>Employees Manage</h2>
			@if((auth()->user()->level == "Admin") || (auth()->user()->level == "SuperAdmin"))
				<div class="sidebar_link {{ Request::is('employees*') ? 'active' : '' }}">
				  <i class="far fa-address-book"></i>
				  <a href="{{ url('/employees') }}">Employees List</a>
				</div>

				<div class="sidebar_link {{ Request::is('Sallary*') ? 'active' : '' }}">
					<i class="fas fa-hand-holding-usd"></i>
					<a href="{{ url('/Sallary') }}">Sallary</a>
				</div>
			@endif
				<div class="sidebar_link {{ Request::is('schedule*') ? 'active' : '' }}">
					<i class="fas fa-clipboard-list"></i>
					<a href="{{ url('/schedule') }}">Schedule</a>
				</div>
				<h2>Patient Manage</h2>
				<div class="sidebar_link {{ Request::is('patients*') ? 'active' : '' }}">
				  <i class="icon mr-2 fab fa-accessible-icon"></i>
				  <a href="{{ url('/patients') }}">Patient List</a>
				</div>
			@if((auth()->user()->level == "Admin") || (auth()->user()->level == "SuperAdmin"))
				<div class="sidebar_link {{ Request::is('medicine*') ? 'active' : '' }}">
				  <i class="fas fa-pills"></i>
				  <a href="{{ url('/medicine') }}">Drags</a>
				</div>
				<div class="sidebar_link {{ Request::is('history*') ? 'active' : '' }}">
				  <i class="fas fa-history"></i>
				  <a href="{{ url('/history') }}">History</a>
				</div>
			@endif
				<div class="sidebar_link {{ Request::is('heartbeatCensor*') ? 'active' : '' }}">
				  <i class="icon mr-2 fas fa-wave-square"></i>
				  <a href="{{ url('/heartbeatCensor') }}">Heartbeat Sensor</a>
				</div>
				<div class="sidebar_link {{ Request::is('temperatureCensor*') ? 'active' : '' }}">
				  <i class="icon mr-2 fas fa-temperature-high"></i>
				  <a href="{{ url('/temperatureCensor') }}">Temperature Sensor</a>
				</div>
		</div>	
		<!-- <div class="sidebar_footer">
			<label for="check">
				<i class="icon fas fa-chevron-left" id="sidebarBtn"></i>
			</label>
		</div>	 -->
	</div>
	<div class="content">
	  	<nav class="navbar border-bottom shadow rounded">
	  		<div class="nav_icon" onclick="toggleSidebar()">
	  			<i class="fa fa-bars"></i>
	  		</div>
	  		<div class="navbar_left">
	  			<input type="text" name="search" placeholder="Search.." class="srcButton form-control" aria-label="Search">
	  		</div>
	  		<div class="navbar_right">
	  			<a href="">
	  				<i class="fas fa-bell"></i>
	  			</a>
	  			<div class="dropdown ml-auto">
	  			  <a class="dropdown-toggle-hidden" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
	  			   <img src="{{ asset('assets/img/one.jpg') }}" class="img-fluid rounded-circle avatar">
	  			  </a>

	  			  <div class="dropdown-menu dropdown-menu-right bg-darkblue" aria-labelledby="dropdownMenuLink">
	  			    <a class="dropdown-item" href="#">
	  			    	<i class="fas fa-id-card-alt"></i>
	  			    	<span>Profil</span>
  			    	</a>
  			    	<a class="dropdown-item" href="#">
	  			    	<i class="fas fa-clipboard-list"></i>
	  			    	<span>Schedule</span>
  			    	</a>
  			    	<a class="dropdown-item" href="#">
						<i class="fas fa-hand-holding-usd"></i>
	  			    	<span>Sallary</span>
  			    	</a>
	  			    <div class="dropdown-divider"></div>
	  			    <a class="dropdown-item" href="/logout">
	  			    	<i class="fas fa-power-off"></i>
	  			    	<span>Logout</span>
	  			    </a>
	  			  </div>
	  			</div>
	   		</div>
	  	</nav>
		<main>
			<div class="main_container">
				<div class="main_title mb-2">
					@yield('menu_title')
				</div>
				
				<div class="main_content">
					@yield('content')
				</div>
			</div>
		</main>
    </div>
  </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{ asset('assets/fontawesome/js/fontawesome.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>
    <script src="{{ asset('assets/js/employee_modal.js') }}"></script>
   
   	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   

    @yield('script')
  </body>
</html>