<!DOCTYPE html>
<html>
<head>
	<title>Log-in</title>
</head>
<body>
<div>
	{{ $message }}
</div>
<div id="signup">
	<form method="POST" action="/signup">
		{{ csrf_field() }}
		<input type="text" name="idnum" placeholder="ID No." required="true"><br>
		<input type="text" name="fname" placeholder="First Name" required="true"><br>
		<input type="text" name="lname" placeholder="Last Name" required="true"><br>
		<select name="course" required="true">
			<option value="BAB" >BAB</option>
			<option value="BSA">BSA</option>
			<option value="BSAT">BSAT</option>
			<option value="BSIS">BSIS</option>
			<option value="BSSW">BSSW</option>
			<option value="OM">OM</option>
			<option value="ACT">ACT</option>
			<option value="MCT">MCT</option>
			<option value="NA">NA</option>
			<option value="IC">IC</option>
		</select>
		<select name="year" required="true">
			<option value="1" >1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select><br>
		<input type="text" name="password" placeholder="Password" required="true"><br>
		<input type="text" name="login" value="1" hidden="true"><br>
		<button type="submit" name="SIGNUP">SIGNUP</button>
	</form>
</div><br><br>
<div id="login">
	<form method="POST" action="/login">
		{{ csrf_field() }}
		<input type="text" name="idnum" placeholder="ID No." required="true"><br>
		<input type="text" name="password" placeholder="Password" required="true"><br>
		<input type="text" name="login" value="1" hidden="true"><br>
		<button type="submit">LOGIN</button>
	</form>
</div>
</body>
</html>