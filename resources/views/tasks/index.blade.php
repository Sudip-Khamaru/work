<!DOCTYPE html>
<html>
	<head>
		<title>Tasks</title>
	</head>
	<body>
		@foreach ( $tasks as $task ) 

			<li>
				<a href="./tasks/{{ $task->id }}">
			
					{{ $task->body }}
			
				</a>
			</li>

 		@endforeach		
	</body>
</html>