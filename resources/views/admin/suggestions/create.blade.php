@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>SUGGESTION REGISTRATION</h5>
                    <span>add Suggestion</span>
                </div>
            </div>
        </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Suggestion</a></li>
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
    <div class="card-header"><h3>Add Suggestion</h3></div>
    <div class="card-body">
        <form class="forms-sample" action="{{route('suggestion.store')}}" method="post" enctype="multipart/form-data" >@csrf
            <div class="row">
                <div class="col-lg-6">
                    <label for="">Full name</label>
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
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Branch</label>
                        <select name="branch" class="form-control">
                            <option value="">Please select</option>

                            @foreach(App\Models\Branch::all() as $b)
                                <option value="{{$b->branch}}">{{$b->branch}}</option>
                            @endforeach
                        </select>


                         @error('department')
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
                            <option value="">Please select</option>

                            @foreach(App\Models\Department::all() as $d)
                                <option value="{{$d->department}}">{{$d->department}}</option>
                            @endforeach
                        </select>


                         @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>
                </div>
            </div>
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
                    <label for="">Client's Phone No</label>
                    <input type="text" name="client_no" class="form-control @error('client_no') is-invalid @enderror"value="                   {{old('client_no')}}">
                                @error('client_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
            </div><br>

                
            <div class="form-group">
                <label for="exampleTextarea1">Suggestion</label>
                <textarea class="form-control @error('suggestion') is-invalid @enderror" id="exampleTextarea1" rows="4" name="suggestion">
                {{old('suggestion')}}

                </textarea>
                    @error('suggestion')
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