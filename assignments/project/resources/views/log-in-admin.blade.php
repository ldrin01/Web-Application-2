<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
<div>
	{{ $message }}
</div>
<div id="login">
	<form method="POST" action="/loginAdmin">
		{{ csrf_field() }}
		<input type="text" name="username" placeholder="Username"><br>
		<input type="text" name="password" placeholder="Password"><br>
		<button type="submit" name="LOGIN">LOGIN</button>
	</form>
</div>
</body>
</html>