@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Complaints</h5>
                    <span>Update complaint </span>
                </div>
            </div>
        </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Complaint</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update</li>
            </ol>
        </nav>
    </div>
    </div>
</div>

<div class="row justify-content-center">
	<div class="col-lg-10">
        @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
       
	<div class="card">
	<div class="card-header"><h3>Update Complaint T000{{$complaint->id}}</h3></div>
	<div class="card-body">
		<form class="forms-sample" action="{{route('complaintupdate.finance',[$complaint->id])}}" method="post" enctype="multipart/form-data" >@csrf
            @method('PUT')
			
            <div class="row">
                
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control">
                                  <option value="{{$complaint->status}}"> {{$complaint->status}} </option>
                                   <option value="Not Reviewed"> Not Reviewed </option>
                                  <option value="Received"> Received </option>
                                  <option value="In Progress"> In Progress </option>
                                  <option value="Resolved"> Resolved </option> 
                                </select>



                                 @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                
                            </div>
                        </div>
                        
                    
          
            </div>


            

                
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>


				</form>
			</div>
		</div>
	</div>
</div>


@endsection