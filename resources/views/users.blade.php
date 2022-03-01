!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>


<div class="container">
	<h1>User List- ItSolutionStuff.com</h1>
	<table class="table table-bordered">
		<tr>
			<th>Id</th>
			<th>name</th>
			<th>email</th>
		</tr>
		@foreach($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
		</tr>
		@endforeach
	</table>
</div>


</body>
</html>
