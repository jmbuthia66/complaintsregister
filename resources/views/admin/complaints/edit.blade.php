@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Complaints</h5>
                    <span>Update complaint</span>
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
	<div class="card-header"><h3>Add Complaint</h3></div>
	<div class="card-body">
		<form class="forms-sample" action="{{route('complaint.update',[$complaint->id])}}" method="post" enctype="multipart/form-data" >@csrf
            @method('PUT')
			
            <div class="row">
                @if(auth()->check()&& auth()->user()->role->name !== 'CSO')
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



                                 @error('branch')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                
                            </div>
                        </div>
                        @endif

                    <div class="col-md-6">
                          <div class="form-group">
                        <label for="">Priority</label>
                        <select name="priority" class="form-control">
                          

                       



                            @foreach(App\Models\Priority::all() as $priority)
                            <option value="{{$priority->priority}}" @if($complaint->priority==$priority->priority)selected @endif>{{$priority->priority}}</option> 
                            @endforeach


                         

                        </select>



                         @error('priority')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>
                </div>
            </div>


            <div class="row">
				<div class="col-lg-6">
					<label for="">Full name</label>
					<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="doctor name" value="{{strtoupper(Auth()->user()->name)}}">
                    @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
				</div>
				<div class="col-lg-6">
					<label for="">Email</label>
					<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email"value="{{Auth()->user()->email}}">
                     @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
				</div>
			</div><br>


			<div class="row">
				<div class="col-md-6">
                    <div class="form-group">
                        <label for="">Branch</label>
                        <select name="branch" class="form-control">
                          

                       



                            @foreach(App\Models\Branch::all() as $branch)
                            <option value="{{$branch->branch}}" @if($branch->branch==$branch->branch)selected @endif>{{$branch->branch}}</option> 
                            @endforeach


                         

                        </select>



                         @error('branch')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="form-group">
                        <label for="">Department</label>
                        <select name="department" class="form-control">
                          

                       



                            @foreach(App\Models\Department::all() as $department)
                            <option value="{{$department->department}}" @if($complaint->department==$department->department)selected @endif>{{$department->department}}</option> 
                            @endforeach


                         

                        </select>



                         @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>
                </div>
			</div><br>

				

            <div class="row">
                <div class="col-lg-6">
                    <label for="">Client Name</label>
                    <input type="text" name="client_name" class="form-control @error('client_name') is-invalid @enderror" placeholder="client name" value="{{$complaint->client_name}}">
                    @error('client_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-6">
                    <label for="">Client Email</label>
                    <input type="email" name="client_email" class="form-control @error('client_email') is-invalid @enderror" placeholder="client_email"value="{{$complaint->client_email}}">
                     @error('client_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div><br>

            <div class="row">
                <div class="col-lg-6">
                    <label for="">Client ID</label>
                    <input type="text" name="client_id" class="form-control @error('client_id') is-invalid @enderror" placeholder="client id" value="{{$complaint->client_id}}">
                    @error('client_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-6">
                    <label for="">Client Phone Number</label>
                    <input type="text" name="client_no" class="form-control @error('client_no') is-invalid @enderror" placeholder="client_no"value="{{$complaint->client_no}}">
                     @error('client_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div><br>

            <div class="row">
                <div class="col-lg-6">
                    <label for="">Policy Number</label>
                    <input type="text" name="policy_no" class="form-control @error('policy_no') is-invalid @enderror" placeholder="policy_no" value="{{$complaint->policy_no}}">
                    @error('policy_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Touch Point</label>
                        <select name="point" class="form-control">
                          

                       



                            @foreach(App\Models\Point::all() as $point)
                            <option value="{{$point->point}}" @if($complaint->point==$point->point)selected @endif>{{$point->point}}</option> 
                            @endforeach


                         

                        </select>



                         @error('point')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>
                </div>
                
                    
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Query Type</label>
                        <select name="query" class="form-control">
                          

                       



                            @foreach(App\Models\Query::all() as $query)
                            <option value="{{$query->query}}" @if($query->query==$query->query)selected @endif>{{$query->query}}</option> 
                            @endforeach


                         

                        </select>



                         @error('query')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>
                </div>
            </div>

            <div class="row">
            	<div class="col-lg-6">
                    <label for="">Subject</label>
                    <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="subject" value="{{$complaint->subject}}">
                    @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                    
                </div><br>
                
                <div class="form-group">
                <label for="exampleTextarea1">Complaint</label>
                <textarea class="form-control @error('complaint') is-invalid @enderror" id="exampleTextarea1" rows="4" name="complaint">
                {{$complaint->complaint}}

                </textarea>
                    @error('complaint')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
                
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>


				</form>
			</div>
		</div>
	</div>
</div>


@endsection