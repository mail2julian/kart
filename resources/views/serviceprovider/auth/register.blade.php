@extends('serviceprovider.layouts.auth')
@section('content_script')

<link rel="stylesheet" href="http://jonthornton.github.io/jquery-timepicker/jquery.timepicker.css" type="text/css" />

<script src= "https://cdn.jsdelivr.net/openlocationcode/latest/openlocationcode.min.js"></script>

<script src= "https://cdnjs.cloudflare.com/ajax/libs/openlocationcode/1.0.3/openlocationcode.min.js"></script>

<script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

<script src="http://jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>

<script>

  $(document).ready(function () {
	       
	            $('#startTime').timepicker();

                
				
               	$('#endTime').timepicker();
               
               
	        	
  });

</script>


<script>
function getLocation() {
    
     if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(showPosition, showError);
         
         } else { 
            document.getElementById("demo").innerHTML = "Geolocation is not supported by this browser.";
         
    }
}

function showPosition(position) {
  	var codee = OpenLocationCode.encode(position.coords.latitude,position.coords.longitude,OpenLocationCode.CODE_PRECISION_EXTRA);
	document.getElementById("google_code").value=codee;
   
    
 
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
        document.getElementById("demo").innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
        document.getElementById("demo").innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
        document.getElementById("demo").innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
        document.getElementById("demo").innerHTML = "An unknown error occurred."
            break;
    }
}
</script>


<style>

/* tooltip */


.tool-tip{
	color: #fff;
	background-color: rgba( 0, 0, 0, .7);
	text-shadow: none;
	font-size: .8em;
	visibility: hidden;
	-webkit-border-radius: 7px; 
	-moz-border-radius: 7px; 
	-o-border-radius: 7px; 
	border-radius: 7px;	
	text-align: center;	
	opacity: 0;
	z-index: 999;
	
	position: absolute;
	cursor: default;
	-webkit-transition: all 240ms ease-in-out;
	-moz-transition: all 240ms ease-in-out;
	-ms-transition: all 240ms ease-in-out;
	-o-transition: all 240ms ease-in-out;
	transition: all 240ms ease-in-out;	
}

.tool-tip{
	top: auto;
	bottom: 114%;
	left: 50%;		
}


.tool-tip:after{
	position: absolute;
	bottom: -12px;
	left: 50%;
	margin-left: -7px;
	content: ' ';
	height: 0px;
	width: 0px;
	border: 6px solid transparent;
    border-top-color: rgba( 0, 0, 0, .7);	
}

/* default heights, width and margin w/o Javscript */

.tool-tip{
	width: 100%;
	height: 22px;
	margin-left: -43px;
}

/* tool tip position right */

.tool-tip.right{
	top: 50%;
	right: auto;
	left: 106%;
	margin-top: -15px;
	margin-right: auto;	
	margin-left: auto;
}

.tool-tip.right:after{
	left: -5px;
	top: 50%;	
	margin-top: -6px;
	bottom: auto;
	border-top-color: transparent;	
    border-right-color: rgba( 0, 0, 0, .7);	
}

/* tool tip position left */


/* tooltip on focus left and right */

.on-focus .tool-tip.left,
.on-focus .tool-tip.right{
	margin-top: -19px;
}

/* on hover of element containing tooltip default*/

*:not(.on-focus):hover > .tool-tip,
.on-focus input:focus + .tool-tip{
	visibility: visible;
	opacity: 1;
	-webkit-transition: all 240ms ease-in-out;
	-moz-transition: all 240ms ease-in-out;
	-ms-transition: all 240ms ease-in-out;
	-o-transition: all 240ms ease-in-out;
	transition: all 240ms ease-in-out;		
}


/* tool tip slide out */

*:not(.on-focus) > .tool-tip.slideIn,
.on-focus > .tool-tip{
	display: block;
}

.on-focus > .tool-tip.slideIn{
	z-index: -1;
}

.on-focus > input:focus + .tool-tip.slideIn{
	z-index: 1;
}


/* right slideIn */

*:not(.on-focus) > .tool-tip.slideIn.right,
.on-focus > .tool-tip.slideIn.right{
	left: 50%;		
}

*:not(.on-focus):hover > .tool-tip.slideIn.right,
.on-focus > input:focus + .tool-tip.slideIn.right{
	left: 105%;
}

input[type=text], input[type=email], input[type=tel], input[type=password]
{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 4px;
}

.card-header-one
{
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(240, 130, 40, 1);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

/* Customize the label (the container) */
.container-cust {
  display: block;
  position: relative;
  left: 280px;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container-cust input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container-cust:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container-cust input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container-cust input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container-cust .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}


</style>
@endsection
@section('content')
<div id='app'></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <h1> <div class="card-header-one">{{ __('Register') }}</div></h1>
                    <p>Please fill in this form to create an account.</p><br><br>

                <div class="card-body">
                    <form method="POST"   >
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                            <div class="on-focus clearfix" style="position: relative; padding: 0px; margin: 10px auto; display: table; float: left">
                                <input id="name" pattern="[A-Za-z ]{3,40}" placeholder="Enter your name" onblur = "getLocation();" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" >
                                <div class="tool-tip slideIn right">Example: John Doe</div>
		</div>
                                

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">

                                <div class="on-focus clearfix" style="position: relative; padding: 0px; margin: 10px auto; display: table; float: left">
                                 <input id="email" placeholder="Enter your Email" pattern  = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                <div class="tool-tip slideIn right">Example: example@xyz.com</div>
        </div>

                               

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <div class="on-focus clearfix" style="position: relative; padding: 0px; margin: 10px auto; display: table; float: left">
                                <input id="phone_no" placeholder="Enter your phone number" type="tel" pattern="[6789][0-9]{9}" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" name="phone_no" value="{{ old('phone_no') }}" required title= "Enter The Phone Number">
                                <div class="tool-tip slideIn right">Example: 9999999999</div>
        </div>
                               

                                @if ($errors->has('phone_no'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                 <div class="on-focus clearfix" style="position: relative; padding: 0px; margin: 10px auto; display: table; float: left">
                                 <input id="password" placeholder="Enter your Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <div class="tool-tip slideIn right">Minimum 6 characters required </div>
        </div>
                              

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                       
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <div class="on-focus clearfix" style="position: relative; padding: 0px; margin: 10px auto; display: table; float: left">
                                 <input id="password-confirm" placeholder="Retype ypur password" type="password"  class="form-control" name="password_confirmation" required>
                                <div class="tool-tip slideIn right">Should be same as the  Above Password</div>
        </div>
                               
                            </div>
                        </div>
                    
                    
                    <label class="container-cust">Monday
                        <input type="checkbox" name="Day[]" value="Monday">
                        <span class="checkmark"></span>
                    </label> 
                    
                    <label class="container-cust">Tuesday
                            <input type="checkbox" name="Day[]" value="Tuesday">
                            <span class="checkmark"></span>
                        </label>
                    
                    <label class="container-cust">Wednesday
                        <input type="checkbox" name="Day[]" value="Wednesday">
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="container-cust">Thursday
                            <input type="checkbox" name="Day[]" value="Thursday">
                            <span class="checkmark"></span>
                    </label>

                    <label class="container-cust">Friday
                        <input type="checkbox" name="Day[]" value="Friday">
                        <span class="checkmark"></span>
                    </label>

                    <label class="container-cust">Saturday
                        <input type="checkbox" name="Day[]" value="Saturday">
                        <span class="checkmark"></span>
                    </label>

                    <label class="container-cust">Sunday
                            <input type="checkbox" name="Day[]" value="Sunday">
                            <span class="checkmark"></span>
                    </label>

                    <!--
                    <input type="checkbox" class="form-control" name="Day[]" value="Monday"> Monday
                    <input type="checkbox" class="form-control" name="Day[]" value="Tuesday"> Tuesday
                    <input type="checkbox" class="form-control"  name="Day[]" value="Wednesday"> Wednesday
                    <input type="checkbox" class="form-control" name="Day[]" value="Thursday"> Thursday
                    <input type="checkbox" class="form-control" name="Day[]" value="Friday"> Friday
                    <input type="checkbox" class="form-control" name="Day[]" value="Saturday"> Saturday
                    <input type="checkbox" class="form-control" name="Day[]" value="Sunday"> Sunday<br>
                    
                    -->    
                         <!-- <div class="form-group row">
                            <label for="Category" class="col-md-4 col-form-label text-md-right">{{ __('Day[] Of Week') }}</label>

                            <div class="col-md-6">
                               
                                   <select multiple id="Day Of Week" type="text"  class="form-control" name="end_time" onchange = "">
                                    <option value="0" selected>Select Days Of Your Service</option>
                                    <option value="1">Sunday</option>
                                    <option value="2">Monday</option>
                                    <option value="4">Tuesday</option>
                                    <option value="8">Wednesday</option>
                                    <option value="16">Thursday</option>
                                    <option value="32">Friday</option>
                                    <option value="64">Saturday</option>
                                </select> 
                                
                         </div>
                               
                            </div>-->
                
                           
                                <input id="google_code" type="hidden" class="form-control{{ $errors->has('google_code') ? ' is-invalid' : '' }}" name="google_code"  value="{{ old('google_code') }}" >

                                @if ($errors->has('google_code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('google_code') }}</strong>
                                    </span>
                                @endif
                            <p id = "demo"></p>
                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" >
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection