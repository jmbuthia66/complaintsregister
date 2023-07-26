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
				Dear {{$mailData['name']}},
				<p>A ticket hass been assigned to you by a Customer Service Officer</p>
				<p>The details of your complaint are below:</p><br>
				
				Time & Date: {{$mailData['created_at']}}<br>
				Registered By: {{$mailData['cso']}}<br>
				Subject: {{$mailData['subject']}}<br>
				Query: {{$mailData['query']}}<br>

				<p>Dear {{$mailData['name']}}, please use your ticket number as the referral point</p><br>

				

			</div>
       		</div>




          </div>
</body>
</html>