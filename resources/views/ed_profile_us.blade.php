@extends('style')

@section('content')

@include('navbar')
<br>
<br>
<div class="container rounded bg-white mt-5">  
 <div class="row">
  <div class="col-md-4 border-right">
  	<div class="d-flex flex-column align-items-center text-center p-3 py-5">
  	   <img class="rounded-circle mt-5" src="{{ asset('assets/profile.jpg') }}" width="90">
  	   <span class="font-weight-bold">
  	   	 {{ Auth::user()->name }}
  	   </span>
  	   <span class="text-black-50">
  	   	 {{ Auth::user()->email }}
  	   </span>
  	   <span>
  	   	 {{ Auth::user()->address }}
  	   </span>
  	</div>
  </div>

  <div class="col-md-8">
  	<div class="p-3 py-5">
     <div class="d-flex justify-content-between align-items-center mb-3">
       <h6 class="text-right">Edit Profile</h6>
     </div>
     @if(session()->has('success'))
       <div class="alert alert-success" role="alert">
          {{ session()->get('success') }}
       </div>
     @endif
     <form method="post" action="{{ url('/update_d_us') }}">
     	{{ csrf_field() }}
     <div class="row mt-2">
       <div class="col-md-6">
       	<input type="text" class="form-control" name="username" placeholder="User name" value="{{ Auth::user()->name }}">

         <span style="color:red;">
         @if($errors->has('username'))
            {{ $errors->first('username') }}
		 @endif
		 </span>

       </div>
       <div class="col-md-6">
       	<input type="text" class="form-control" name="email" placeholder="Email" 
       	  value="{{ Auth::user()->email }}">

         <span style="color:red;">
         @if($errors->has('email'))
            {{ $errors->first('email') }}
		 @endif
		 </span>
      </div>
    </div>
    <div class="row mt-3">
       <div class="col-md-6">
       	<input type="password" class="form-control" name="password" placeholder="password" value="">
       </div>
       <div class="col-md-6">
       	<input type="password" class="form-control" value="" name="password_confirmation" placeholder="confirm password">
       </div>
    </div>
     <span style="color:red;">
         @if($errors->has('password'))
            {{ $errors->first('password') }}
		 @endif
	 </span>
    <div class="row mt-3">
      <div class="col-md-6">
      	<input type="text" class="form-control" name="address" placeholder="your residential address" value="{{ Auth::user()->address }}">
      	 <span style="color:red;">
         @if($errors->has('address'))
            {{ $errors->first('address') }}
		 @endif
		 </span>
      </div>
    </div>
     <div class="mt-5 text-right">
      <input type="submit" value="Save Profile">
     </div>
   </form>
   </div>
  </div>
 </div>
</div>

@endsection