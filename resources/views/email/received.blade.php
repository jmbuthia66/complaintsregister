<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
			<div class ="container-fluid">
			<div class="card">
			<div class="card-header"></div>
			<div class="card-body">
				Dear {{$mailData['client_name']}},
				<p>Thank you for taking the time to issue your complaint with Madison Group</p>
				<p>The details of your complaint are below:</p><br>
				TICKET NUMBER: T0000{{$mailData['id']}}<br>
				Time & Date: {{$mailData['created_at']}}<br>
				Registered By: {{$mailData['name']}}<br>
				Subject: {{$mailData['subject']}}<br>

				<p>Dear {{$mailData['client_name']}}, please use your ticket number as the referral point</p><br>

				Where: 1post office,Mlebourne
				Contact:(04)9348383

			</div>
       		</div>




          </div>
</body>
</html>

