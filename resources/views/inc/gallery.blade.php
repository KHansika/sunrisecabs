<div class="container">
        {{-- Search form is here --}}
                <div class="container">
                    
                
                                {!!Form:: open(['action'=>['SearchController@vehiclesearch'], 'method'=>'POST','class'=>'needs-validation'])!!}
                                                 {{ csrf_field() }}
                                                <div class="row">            
                                                <div class="col-md-4">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="vtype"
                                                        placeholder="Vehicle Type">
                                                        <input type="hidden" class="form-control" name="bookid"
                                                value="{{$booking->id}}">
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="datepicker1"name="startdate"
                                                                        placeholder="Start Date"> 
                                                                <input name="id" type="hidden" value="{{$booking->id}}">       
                                                                    </span>
                                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="datepicker2"name="returndate"
                                                                placeholder="Return Date"> <span class="input-group-btn">
                                                                        
                                                                <button type="submit" class="btn btn-default">
                                                                    <span class="glyphicon glyphicon-search"></span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                        </div>
                                        </div>
                                            </form>
                        
                </div>
         {{-- end of search form --}}
     
         {{-- testing output --}}
         <div class="container">
                @if(isset($details))
                    <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                <h2>Sample User details</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Piklocation</th>
                            <th>No Of days</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $user)
                        <tr>
                            <td>{{$user->piklocation}}</td>
                            <td>{{$user->days}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
         {{-- testing output --}}
        <div class="card-deck mb-3 text-center">
                <div class="card mb-5 shadow-sm">
                        <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Enterprise</h4>
                        </div>
                        <img class="card-img-top" src="https://via.placeholder.com/250x200" alt="Card image cap">
                        
                        <div class="card-body">
                          <h1 class="card-title pricing-card-title">$20 <small class="text-muted">/ Day</small></h1>
                          <button type="button" class="btn btn-lg btn-block btn-primary">Select Vehicle</button>
                        </div>
                </div>
                <div class="card mb-5 shadow-sm">
                        <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Enterprise</h4>
                        </div>
                        <img class="card-img-top" src="https://via.placeholder.com/250x200" alt="Card image cap">
                        
                        <div class="card-body">
                          <h1 class="card-title pricing-card-title">$20 <small class="text-muted">/ Day</small></h1>
                          <button type="button" class="btn btn-lg btn-block btn-primary">Select Vehicle</button>
                        </div>
                </div>
                <div class="card mb-5 shadow-sm">
                        <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Enterprise</h4>
                        </div>
                        <img class="card-img-top" src="https://via.placeholder.com/250x200" alt="Card image cap">
                        
                        <div class="card-body">
                          <h1 class="card-title pricing-card-title">$20 <small class="text-muted">/ Day</small></h1>
                          <button type="button" class="btn btn-lg btn-block btn-primary">Select Vehicle</button>
                        </div>
                </div>
            
          
          
        </div>
        