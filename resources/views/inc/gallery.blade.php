<head>
<!-- provide the csrf token -->
<meta name="csrf-token" content="{{ csrf_token() }}" /></head>

<div class="container">
               {{-- Search form is here --}}
                <div class="container">
        {!!Form:: open(['action'=>['SearchController@vehiclesearch'], 'method'=>'POST','class'=>'needs-validation'])!!}
                             {{ csrf_field() }}
            <div class="row">            
            <div class="col-md-4">
            <div class="input-group">
    {!!Form::select('vtype', ['s'=>'Select Vehicle Type','Cars' => 'Cars', 'Vans' => 'Vans','Buses'=>'Buses'], 's',['class'=>'form-control'])!!}
            <input type="hidden" class="form-control" name="bookid" value="{{$booking->id}}">
            </div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                {{-- <input placeholder="Date" class="textbox-n" type="text" onfocusin="(this.type='date')" onfocusout="(this.type='text')"  id="date">  --}}                        <input type="text" value="" class="form-control" id="datepicker2" onfocusin="(this.type='date')" placeholder="Start Date" onfocusout="(this.type='text')" name="startdate" required>
                <input name="id" type="hidden" value="{{$booking->id}}">       
                </span>
                </div>
            </div>
            <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" value="" class="form-control" onfocusin="(this.type='date')" onfocusout="(this.type='text')" id="datepicker2" name="returndate"
                            placeholder="Return Date" required> <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"> search</span>
                            </button>
                        </span>
                    </div>
                    </div>
    </div>
    @include('inc.messages')

        </form>
        @if ($errors->any())
    </div>
{{-- end of search form --}}     
         {{-- testing output --}}
         @elseif(count ($vehicles)>0)
            <div class="container">
                    <div class="container">
                            <div class="row">
                          <div class="card-deck mb-3 text-center">
                              @foreach($vehicles as $vehicles)
                              <div class="col-4">
                              <div class="card mb-5 shadow-sm">
                                    <div class="card-header">
                                         <h5 class="my-0 font-weight-normal">Enterprise</h5>
                                    </div>
                                    <img class="card-img-top vehicle-image" src="/storage/cover_images/{{$vehicles->cover_image}}">
                                <input type="hidden" class='vid' name='vehicleid' value='{{$vehicles->id}}'>
                                    <div class="card-body">
                                          <h3 class="card-title pricing-card-title">{{$vehicles->price}} <small class="text-muted">/ Rs-Day</small></h3>
                                    <button type="button" class="btn blue-gradient btn-block btn-primary addCart" onclick="addingtocart('{{$vehicles->id}}')" >Select Vehicle</button>
                                        </div>
                                </div>
                              </div>
                              @endforeach
                            </div>
                            </div>
                          </div>
                </div>

          @else
         <div class="alert alert-danger" role="alert">
            No vehicle Found Available On Your Selection
          </div>         
        @endif
         
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    
  <script>
      function addingtocart($id){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var url='{{url("/addcart")}}'
        $("#vprice,#vimage,#vname,#vcategory,.vid").html("");
        $.ajax({
                  /* the route pointing to the post function */
                  url: url,
                  type: 'POST',
                  /* send the csrf-token and the input to the controller */
                  data: {_token: CSRF_TOKEN, message:$id},
                  dataType: 'JSON',
                  /* remind that 'data' is the response of the AjaxController */
                  success: function (data) { 
                      console.log(data);
                      $("#vprice").append(data.vprice);
                      $("#perday").val(data.vprice);
                      $("#vimage").attr("src",data.vimage);
                      $("#vname").append(data.vname);
                      $("#vcategory").append(data.vcategory);
                      $("#vid").val(data.id);
                  }
              }); 
      }
      //create
      var url='{{url("/addcart")}}'
     $(document).ready(function(){
          $(".addCart").click(function(){
              
          });
     });    

  </script> 
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="{{asset('js/jquery.datetimepicker.full.min.js')}}"></script>

  <script>
     
        $('#startdate').datetimepicker({
        format: 'Y/m/d',       
        inline:true,
        timepicker: false,
        minDate:true,
    
        });
        
        
    
    </script>
   
