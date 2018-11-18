<div class="container">
        @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
        <h2>Sample User details</h2>
        <tr>
            <?php $i=0; ?>
                   @foreach($details as $user)
                <tr>
                    <?php $i+=1;?>
                    <td>
                        <div class="card mb-5 shadow-sm">
                                <div class="card-header">
                                        <h4 class="my-0 font-weight-normal">Enterprise</h4>
                                </div>
                                <img class="card-img-top" src="https://via.placeholder.com/250x200" alt="Card image cap">
                                
                                <div class="card-body">
                                <h1 class="card-title pricing-card-title">{{$user->piklocation}}<small class="text-muted">/ Day</small></h1>
                                <button type="button" class="btn btn-lg btn-block btn-primary">Select Vehicle</button>
                                </div>
                        </div>
                    </td> 
                    @if($i==3)
                    </tr>
                    <tr>
                      <?php  $i==0;?>
                      @endif

                    <td>{{$user->piklocation}}</td>
                    <td>{{$user->days}}</td>
                @endforeach
        @endif
    </div>