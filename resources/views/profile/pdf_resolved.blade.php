<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
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
  <div class="card">
        <div class="card-header"><h3>List of all Resolved Complaints</h3>

        </div>
        <div class="card-body">
<h1>Resolved Complaints Table </h1>

<table id="customers">
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
</body>
</html>

