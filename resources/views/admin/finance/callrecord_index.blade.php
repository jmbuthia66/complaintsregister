@extends('admin.layouts.master')

@section('content')

<div class="page-header">
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <i class="ik ik-inbox bg-blue"></i>
            <div class="d-inline">
                <h5>Call Records By {{auth()->user()->name}}</h5>
                <span>list of all Call Records</span>
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
                    <a href="#">Call Records</a>
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
                        <th>CALL RECORD ID</th>
                        <th>CREATED AT</th>
                        <th>ASSIGNED TO</th>
                        <th>CLIENT NAME</th>
                        <th>POLICY NO</th>
                        <th>PRIORITY</th>
                        <th>STATUS</th>
                        <th>ACTIONS: </th>
                                                
                    </tr>
                </thead>
                <tbody>
                    @if(count($call_records)>0)
                    @foreach($call_records as $call_record)
                    <tr>
                        <td>CR000{{$call_record->id}}</td>
                        <td>{{$call_record->created_at}}</td>
                        <td>{{$call_record->assignee}}</td>
                        <td>{{$call_record->client_name}}</td>
                        <td>
                             @if($call_record->policy_no==NULL)
                             No Policy Number
                             @else
                            {{$call_record->policy_no}}
                        @endif
                        </td>
                        <td>
                            @if($call_record->priority=='Low')
                            <span class ="badge badge-pill badge-primary mb-1">{{$call_record->priority}}</span>
                            @elseif($call_record->priority=='Medium')
                            <span class ="badge badge-pill badge-warning mb-1">{{$call_record->priority}}</span>
                            @elseif($call_record->priority=='High')
                            <span class ="badge badge-pill badge-danger mb-1">{{$call_record->priority}}</span>
                            @endif

                        </td>
                        <td>
                            @if($call_record->status=='')
                            <span class ="badge badge-pill badge-dark mb-1">{{$call_record->status}}</span>
                            @elseif($call_record->status=='Open')
                            <span class ="badge badge-pill badge-info">{{$call_record->status}}</span>
                            
                            @elseif($call_record->status=='Closed')
                            <span class ="badge badge-pill badge-success mb-1">{{$call_record->status}}</span>
                            @endif
                        <td>
                            <a href="#" data-toggle="modal" data-target="#exampleModal{{$call_record->id}}"><i class="ik ik-eye"></i></a>
                            <a href="{{route('calledit.finance',[$call_record->id])}}"><i class="ik ik-edit-2"></i></a> 
                              
                        </td>
                        
                    </tr>
           
                    <!-- View Modal -->
                    
                    @include('admin.call_records.model')



                    @endforeach
                   
                    @else 
                    <td>No Call Record to display</td>
                    @endif
                
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection 