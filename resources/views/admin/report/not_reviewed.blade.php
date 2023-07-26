@extends('admin.layouts.master')

@section('content')

<div class="page-header">
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <i class="ik ik-inbox bg-blue"></i>
            <div class="d-inline">
                <h5>Report</h5>
                <span>List of all Not Reviewed Complaints</span>
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
                    <a href="#">Report</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Not Reviewed</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #33466d;
  color: white;
}
</style>

<div class="row">
<div class="col-md-12">
       @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
    <div class="card">
        <div class="card-header"><h3>List of all Not Reviewed Complaints</h3>

        </div>
        <div class="card-body">
            <table id="customers">
                <div class="card-body template-demo">
            <button type="button" class="btn btn-info"><a href="{{route('not.pdf')}}"><i class="ik ik-share"></i>Get PDF</a></button>
                </div>
  <tr>
    <th>Ticket Number</th>
    <th>Client Name</th>
    <th>Subject</th>
    <th>Policy Number</th>
    <th>Resolved By</th>
    <th>Status</th>
    <th>Complaint</th>
  </tr>
                  @if(count($complaints)>0)
                    @foreach($complaints as $complaint)
  <tr>
    <td>T000{{$complaint->id}}</td>
    <td>{{$complaint->client_name}}</td>
    <td>{{$complaint->subject}}</td>
    <td> @if($complaint->policy_no==NULL)
        No Policy No
        @else
        {{$complaint->policy_no}}
        @endif
    </td>
    <td>TBC</td>
    <td>{{$complaint->status}}</td>
    <td>{{$complaint->complaint}}</td>
  </tr>
               @endforeach
    @else 
    <td>No complaint to display</td>
    @endif
</table>
        </div>
    </div>
</div>
</div>
@endsection