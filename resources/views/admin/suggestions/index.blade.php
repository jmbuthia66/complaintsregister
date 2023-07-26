@extends('admin.layouts.master')

@section('content')

<div class="page-header">
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <i class="ik ik-inbox bg-blue"></i>
            <div class="d-inline">
                <h5>Suggestions Recorded by {{auth()->user()->name}}</h5>
                <span>list of all Suggestions </span>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Suggestions Recorded by {{auth()->user()->name}}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
            </ol>
        </nav>
    </div>
</div>
</div>


<div class="row">
<div class="col-sm-12">
       @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
    <div class="card">
        <div class="card-header"><h3>Data Table</h3></div>
        <div class="card-body">
          <table id="data_table" class="table">
                <thead>
                    <tr>
                        <th>SUGGESTION ID</th>
                        <th>CREATED AT</th>
                        <th>CLIENT NAME</th>
                        <th>CLIENT EMAIL</th>
                        <th>REGISTERED BY</th>
                        <th>BRANCH</th>
                        <th>DEPARTMENT</th>
                        <th>ACTIONS: </th>
                                                
                    </tr>
                </thead>
                <tbody>
                    @if(count($suggestions)>0)
                    @foreach($suggestions as $suggestion)
                    <tr>
                        <td>SG000{{$suggestion->id}}</td>
                        <td>{{$suggestion->created_at->format('d-m-Y')}}</td>
                        <td>{{$suggestion->client_name}}</td>
                        <td>{{$suggestion->client_email}}</td>
                        <td>{{$suggestion->name}}</td>
                        <td>{{$suggestion->branch}}</td>
                        <td>{{$suggestion->department}}</td> 
                        <td>
                        <a href="#" data-toggle="modal" data-target="#exampleModal{{$suggestion->id}}"><i class="ik ik-eye"></i></a>
                        <a href="{{route('suggestion.edit',[$suggestion->id])}}"><i class="ik ik-edit-2"></i></a> 
                        <a href="{{route('suggestion.show',[$suggestion->id])}}"><i class="ik ik-trash-2"></i></a>      
                         </td>
                        
                    </tr>
           
                    <!-- View Modal -->
                    
                    @include('admin.suggestions.model')



                    @endforeach
                   
                    @else 
                    <td>No suggestion to display</td>
                    @endif
                
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection 