<!DOCTYPE html>
<html>
<head>
	<title>
	@foreach ( $student as $a )
		{{ $a->fname }} {{ $a->lname }}
	@endforeach
	</title>
</head>
<body>
	<div id="logout">
		<form method="POST" action="/logoutStudent">
			{{ csrf_field() }}
			<input type="text" name="login" value="0" hidden="true"><br>
			<button type="submit">LOGOUT</button>
		</form>
	</div>
	</body>
</html>