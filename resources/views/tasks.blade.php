<!DOCTYPE html>
<html>
	<head>
		<title>Tasks</title>
	</head>
	<body>
		@foreach ( $tasks as $task ) 

			<li>{{ $task }}</li>

 		@endforeach		
	</body>
</html>