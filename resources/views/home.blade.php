<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RESTful API</title>	
</head>
<body>
	<h1><center>RESTful API</center></h1>
	<div style="margin-top: -20px; margin-bottom: 20px;">
		<center>
		<table class="table" border="1">
			<thead>
				<tr>
					<th>Method</th>
					<th>URI</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>GET</td>
					<td>/</td>
					<td></td>
				</tr>
			</tbody>
		</table>
		</center>
	</div>
	<hr>
	<h1 style="margin-top: 5px;">Users End Point: </h1>
	<table class="table" border="1" style="margin-top: -20px; margin-bottom: 20px;">
		<thead>
			<tr>
				<th>Method</th>
				<th>URI</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>GET</td>
				<td>users</td>
				<td>Get the list of all users.</td>
			</tr>
			<tr>
				<td>GET</td>
				<td>users/{id}</td>
				<td>Get the user with the specific id.</td>
			</tr>
			<tr>
				<td>POST</td>
				<td>users</td>
				<td>Creates a new user.</td>
			</tr>
			<tr>
				<td>DELETE</td>
				<td>users/{id}</td></td>
				<td>Delete user with specific id.</td>
			</tr>
			<tr>
				<td>PUT</td>
				<td>users/{id}</td></td>
				<td>Update user with specific id.</td>
			</tr>
		</tbody>
	</table>
	<hr>
</body>
</html>