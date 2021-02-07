@if($heartbeat->count() > 0)
	<div class="row ">
	  <div class="col"> 
	    <table class="table">
	      <thead class="thead-light">
	        <tr class="text-center">
	          <th scope="col">#</th>
	          <th scope="col">ID</th>
	          <th scope="col">Heartbeat</th>
	          <th scope="col">Status</th>
	          <th scope="col">Time</th>
	        </tr>
	      </thead>
	      <tbody >
	        @foreach( $heartbeat as $key => $hb )
	        <tr class="text-center" >
	          <th>{{ $heartbeat->firstItem() + $key }}</th>
	          <th>{{ $hb->id }}</th>
	          <th>{{ $hb->heartbeat }}</th>
	          <th>
	            @if($hb->heartbeat > 100)
	                <h6 class="text-danger">High</h6>
	            
	            @elseif($hb->heartbeat >= 60 && $hb->heartbeat <= 100)
	                <h6 class="text-success">Normal</h6>

	            @else <h6 class="text-primary">Low</h6>

	            @endif
	          </th>
	          <th>{{ $hb->created_at }}</th>
	        </tr>
	        @endforeach
	      </tbody>
	    </table>
	  </div>
	</div>
	<div class="row mt-2 ">
	  <div class="col-md-6 d-flex justify-content-start">
	    Showing {{ $heartbeat->firstItem() }}
	    to {{ $heartbeat->lastItem() }}
	    of {{ $heartbeat->total() }} Entries
	  </div>
	  <div class="col-md-6 d-flex justify-content-end">
	    {{ $heartbeat->links() }}
	  </div>
	</div>
@else    
	<p>Data Not Found</p>
@endif