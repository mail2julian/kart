@extends('serviceprovider.layouts.app')

<style>
.h1 {
  color: white;
  padding: 8px;
}

.success {background-color: #2196F3;}

.form-control-one 
{
	font-size: 18px;
	position: relative;
	left: 0;
	height: auto;
	padding: 20px 30px;
	border: 1px;
	border-radius: 0;
	box-shadow: 0;
  background-color: lightseagreen;
}

.form-control-two 
{
	font-size: 18px;
	position: relative;
	left: 0;
	height: auto;
	padding: 20px 30px;
	border: 1px;
	border-radius: 0;
	box-shadow: 0;
  background-color: lightskyblue;
}

</style>
@section('content')

    <div class="container">
    <h1 class="h1 success">Edit Profile</h1>
  	<hr>
	<div class="row">
     
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
    
      {{--  <h3>Personal info</h3>
        
        <form  action = "{{route('profile.update',Auth::guard('serviceprovider')->user()->id)}}"class="form-horizontal" role="form" enctype ="multipart/form-data" method = "post">
       
        </form>
        --}}

          {!! Form::open(['action' => 'ServiceproviderAuth\ProfileController@updateProfile' , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                  <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control-one" value="{{Auth::guard('serviceprovider')->user()->name}}" type="text" name = "name">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone Number:</label>
            <div class="col-lg-8">
              <input class="form-control-two" pattern="[6789][0-9]{9}" value="{{Auth::guard('serviceprovider')->user()->phone_no}}" type="tel"     name = "phone_no">
            </div>
          </div>
        
         
          <div class="form-group">
            <label class="col-md-3 control-label">Email ID:</label>
            <div class="col-md-8">
              <input class="form-control-one" value="{{Auth::guard('serviceprovider')->user()->email}}" type="text" name = "email">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control-two" value="11111122333" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control-one" value="11111122333" type="password">
            </div>
          </div>
   
                {{Form::submit('Edit Record',['class'=>'btn btn-primary'])}}

{!! Form::close() !!} 
      </div>
  </div>
</div>
<hr>
@endsection