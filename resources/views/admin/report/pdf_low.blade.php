@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Report</h5>
                    <span>List of Complaints With Low Priority</span>
                </div>
            </div>
        </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Report</a></li>
                <li class="breadcrumb-item active" aria-current="page">Low Priority</li>
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
    <!DOCTYPE html>

<head>
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
</head>
<body>
<div class="card-body template-demo">
    <button type="submit" class="btn btn-info"><a href="{{route('low.pdf')}}"><i class="ik ik-share"></i>"PDF LOADER"</a></button>
</div>
<h1>Low Priority Table </h1>

<table id="customers">
  <tr>
    <th>Ticket Number</th>
    <th>Client Name</th>
    <th>Subject</th>
    <th>Policy Number</th>
    <th>Resolved By</th>
    <th>Priority</th>
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
    <td>{{$complaint->priority}}</td>
    <td>{{$complaint->complaint}}</td>
  </tr>
               @endforeach
    @else 
    <td>No complaint to display</td>
    @endif
</table>

</body>


        </div>
    </div>
</div>


@endsection