@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="card">
      <div class="card-body">
      <div class="container-fluid">   
        <div class="row">
        <div class="col-md-6">
            <img src="/banner/banner.jpg" class="img-fluid" style="border:`1px solid #ccc;">
        </div>
        <div class="col-md-6">
            <h2>Create an account & Make your Complaint</h2>
            <p> Welcome to the easy and fast Malalamiko Portal for Madison Group. This portal allows Madison Staff Members to 
                make complaints and register suggestions formally concerning a specific department or the organisation as a whole digitally in order to automate the whole
                complaint process. This however is done on behalf of our esteemed customers. In addition to that, the complaints will be grouped according to the specified relations. This will allow faster generation of reports and allow easy decision making.
                
                Enjoy your experience with the Madison Complaints Portal ! </p>

            @if(auth()->check()&& auth()->user()->role->name === 'CSO')
            <div class="mt-5">
               <a href="#section"> <button class="btn btn-success">Register a Complaint</button></a>
            </div>
            @endif
            @if(auth()->check()&& auth()->user()->role->name === 'Administrator')
            <div class="mt-5">
               <a href="{{url('dashboard')}}" > <button class="btn btn-success">Go to Dashboard</button></a>
            </div>
            @endif
            @if(auth()->check()&& auth()->user()->role->name === 'admin')
            <div class="mt-5">
               <a href="{{url('dashboard')}}" > <button class="btn btn-success">Go To Dashboard</button></a>
            </div>
            @endif
           
            <div class="mt-5">
                @guest
               <a href="{{url('/login')}}"><button class="btn btn-secondary">Login</button></a>
               @if (Route::has('register'))
               <a href="{{url('/register')}}"> <button class="btn btn-success">Register</button></a>
               @endif
               @endguest
            </div>
        </div>
        </div>
      </div>
      
    </div>
</div>

@endsection
