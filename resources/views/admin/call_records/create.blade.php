@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>CALL CENTER RECORD</h5>
                    <span>Add Record</span>
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
                <li class="breadcrumb-item active" aria-current="page">Create</li>
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
    <div class="card-header"><h3>Add Record</h3></div>
    <div class="card-body">
        <form class="forms-sample" action="{{route('callcenter.store')}}" method="post" enctype="multipart/form-data" >@csrf
            <div class="row">
                <div class="col-lg-6">
                    <label for="">Full Agent name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="" value="{{strtoupper(Auth()->user()->name)}}">
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
                    <label for="">Client's Full name</label>
                    <input type="text" name="client_name" class="form-control @error('client_name') is-invalid @enderror" placeholder="" value="{{old('client_name')}}">
                    @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-6">
                    <label for="">Client's Email</label>
                    <input type="client_email" name="client_email" class="form-control @error('client_email') is-invalid @enderror" placeholder="email"value="{{old('email')}}">
                     @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div><br>

           
             <div class="row">
                <div class="col-lg-6">
                    <label for="">Client's ID No.</label>
                    <input type="text" name="client_id" class="form-control @error('client_id') is-invalid @enderror"value="                   {{old('client_id')}}">
                                @error('client_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="col-lg-6">
                    <label for="">Client's Phone No</label>
                    <input type="text" name="client_no" class="form-control @error('client_no') is-invalid @enderror"value="                   {{old('client_no')}}">
                                @error('client_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
            </div><br>

            <div class="row">

                <div class="col-lg-6">
                        <div class ="form-group">
                        <label for="">Policy Number</label>
                        <input type="text" name="policy_no" class="form-control @error('policy_no') is-invalid @enderror" placeholder=" policy_no of the complaint" value="{{old('policy_no')}}">
                         @error('policy_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Assignee</label>
                        <select name="assignee" class="form-control">
                            <option value="">Please select</option>

                            @foreach(App\Models\User::where('role_id','=',3)->orderBy('name', 'asc')->get() as $u)
                                <option value="{{$u->name}}">{{$u->name}}</option>
                            @endforeach
                        </select>


                         @error('assignee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>
                </div>
                    
            </div> 

                <div class="row">

                    <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Query Type</label>
                                <select name="query" class="form-control">
                                    <option value="">Please select</option>

                                    @foreach(App\Models\Query::all() as $q)
                                        <option value="{{$q->query}}">{{$q->query}}</option>
                                    @endforeach
                                </select>


                                 @error('query')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                
                            </div>
                    </div>
                   
                    <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Priority</label>
                                <select name="priority" class="form-control">
                                    <option value="">Please select</option>

                                    @foreach(App\Models\Priority::all() as $p)
                                        <option value="{{$p->priority}}">{{$p->priority}}</option>
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
            <div class="form-group">
                <label for="exampleTextarea1">Action</label>
                <textarea class="form-control @error('action') is-invalid @enderror" id="exampleTextarea1" rows="4" name="action">
                {{old('action')}}

                </textarea>
                    @error('action')
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