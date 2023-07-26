@extends('admin.layouts.master')

@section('content')

<div class="page-header">
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <i class="ik ik-inbox bg-blue"></i>
            <div class="d-inline">
                <h5>Complaints by {{auth()->user()->name}}</h5>
                <span>list of all Complaints</span>
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
                    <a href="#">Complaints</a>
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
                        <th>COMPLAINT TICKET ID</th>
                        <th>CREATED AT</th>
                        <th>CLIENT NAME</th>
                        <th>POLICY NO</th>
                        <th>ASSIGNED TO</th>
                        <th>PRIORITY</th>
                        <th>STATUS</th>
                        <th>ACTIONS: </th>
                                                
                    </tr>
                </thead>
                <tbody>
                    @if(count($complaints)>0)
                    @foreach($complaints as $complaint)
                    <tr>
                        <td>T000{{$complaint->id}}</td>
                        <td>{{$complaint->created_at}}</td>
                        <td>{{$complaint->client_name}}</td>
                        <td>
                             @if($complaint->policy_no==NULL)
                             No Policy No
                             @else
                            {{$complaint->policy_no}}
                        @endif
                        </td>
                        <td>{{$complaint->assignee}}</td>
                        <td>
                            @if($complaint->priority=='Low')
                            <span class ="badge badge-pill badge-primary mb-1">{{$complaint->priority}}</span>
                            @elseif($complaint->priority=='Medium')
                            <span class ="badge badge-pill badge-warning mb-1">{{$complaint->priority}}</span>
                            @elseif($complaint->priority=='High')
                            <span class ="badge badge-pill badge-danger mb-1">{{$complaint->priority}}</span>
                            @endif

                        </td>
                        <td>@if($complaint->status=='')
                            <span class ="badge badge-pill badge-dark mb-1">{{$complaint->status}}</span>
                            @elseif($complaint->status=='Not Reviewed')
                            <span class ="badge badge-pill badge-dark mb-1">{{$complaint->status}}</span>
                            @elseif($complaint->status=='Received')
                            <span class ="badge badge-pill badge-info">{{$complaint->status}}</span>
                            @elseif($complaint->status=='In Progress')
                            <span class ="badge badge-pill badge-secondary mb-1">{{$complaint->status}}</span>
                            @elseif($complaint->status=='Resolved')
                            <span class ="badge badge-pill badge-success mb-1">{{$complaint->status}}</span>
                            @endif
                         </td>
                         <td>
                        <a href="#" data-toggle="modal" data-target="#exampleModal{{$complaint->id}}"><i class="ik ik-eye"></i></a>
                        <a href="{{route('complaint.edit',[$complaint->id])}}"><i class="ik ik-edit-2"></i></a> 
                        <a href="{{route('complaint.show',[$complaint->id])}}"><i class="ik ik-trash-2"></i></a>      
                         </td>
                        
                    </tr>
           
                    <!-- View Modal -->
                    
                    @include('admin.complaints.model')



                    @endforeach
                   
                    @else 
                    <td>No Complaint to display</td>
                    @endif
                
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection 