<h1>Admin dashboard</h1>
    @if(count($bookings)>0)
        @foreach ($bookings as $booking)
            <div class="well">
                <h3>{{$booking->vtype}}</h3>
            </div>            
        @endforeach

    @else
        <p>No Bookings</p>
        @endif