@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Call Record</h5>
                    <span>Update Call Record</span>
                </div>
            </div>
        </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Call Record</a></li>
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
	<div class="card-header"><h3>Update Complaint</h3></div>
	<div class="card-body">
		<form class="forms-sample" action="{{route('callupdate.assignee',[$call_record->id])}}" method="post" enctype="multipart/form-data" >@csrf
            @method('PUT')
			
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" class="form-control">
                          <option value="{{$call_record->status}}"> {{$call_record->status}} </option>
                           <option value="Closed"> Closed </option>
                          <option value="Open"> Open </option>
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
                        <label for="">Priority</label>
                        <select name="priority" class="form-control">
                          

                       



                            @foreach(App\Models\Priority::all() as $priority)
                            <option value="{{$priority->priority}}" @if($call_record->priority==$priority->priority)selected @endif>{{$priority->priority}}</option> 
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
					<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder=" name" value="{{strtoupper(Auth()->user()->name)}}">
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
                <div class="col-lg-6">
                    <label for="">Client Name</label>
                    <input type="text" name="client_name" class="form-control @error('client_name') is-invalid @enderror" placeholder="client name" value="{{$call_record->client_name}}">
                    @error('client_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-6">
                    <label for="">Client Email</label>
                    <input type="email" name="client_email" class="form-control @error('client_email') is-invalid @enderror" placeholder="client_email"value="{{$call_record->client_email}}">
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
                    <input type="text" name="client_id" class="form-control @error('client_id') is-invalid @enderror" placeholder="client id" value="{{$call_record->client_id}}">
                    @error('client_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-6">
                    <label for="">Client Phone Number</label>
                    <input type="text" name="client_no" class="form-control @error('client_no') is-invalid @enderror" placeholder="client_no"value="{{$call_record->client_no}}">
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
                    <input type="text" name="policy_no" class="form-control @error('policy_no') is-invalid @enderror" placeholder="policy_no" value="{{$call_record->policy_no}}">
                    @error('policy_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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

                    
                </div><br>
                
                <div class="form-group">
                <label for="exampleTextarea1">Action</label>
                <textarea class="form-control @error('action') is-invalid @enderror" id="exampleTextarea1" rows="4" name="action">
                {{$call_record->action}}

                </textarea>
                    @error('action')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            @if(auth()->check()&& auth()->user()->role->name == 'Assignee')
            <div class="card-header"><h3>Finance Intervention For T000{{$call_record->id}}</h3></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Finance Intervention?</label>
                        <select name="finance" class="form-control">
                            <option value="">select</option>
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>

                        </select>



                         @error('finance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Finance Assignee</label>
                        <select name="finance_assignee" class="form-control">
                          

                       



                            @foreach(App\Models\User::where('role_id','=',5)->orderBy('name', 'asc')->get() as $u)
                                <option value="{{$u->name}}">{{$u->name}}</option>
                                <option value="">select</option>
                            @endforeach


                         

                        </select>



                         @error('finance_assignee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>
                </div>

                    
            </div><br>
                
                <div class="form-group">
                <label for="exampleTextarea1">Comment For Finance</label>
                <textarea class="form-control @error('comment') is-invalid @enderror" id="exampleTextarea1" rows="4" name="comment">
                {{$call_record->comment}}

                </textarea>
                    @error('comment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            @endif

                
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>


				</form>
			</div>
		</div>
	</div>
</div>


@endsection