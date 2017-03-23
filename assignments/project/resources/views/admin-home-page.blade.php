<!DOCTYPE html>
<html>
<head>
	<title>Admin's Page</title>
</head>
<body>
<div>
	{{ $message }}
</div>
<div id="addSubject">
	<form method="POST" action="/registerSubject">
		{{ csrf_field() }}
		<input type="text" name="subjectCode" placeholder="Subject Code" required="true"> for: 
		<select name="year" required="true">
			<option value="1">1st Year</option>
			<option value="2">2nd Year</option>
			<option value="3">3rd Year</option>
			<option value="4">4th Year</option>
		</select><br>
		<input type="text" name="subjectName" placeholder="Subject Name" required="true"><br>
		Professor's Name:<br>
		<select name="maritalStatus" required="true">
			<option value="Ms.">Ms.</option>
			<option value="Mr.">Mr.</option>
		</select><br>
		<input type="text" name="professorFname" placeholder="First Name" required="true"><br>
		<input type="text" name="professorLname" placeholder="Last Name" required="true"><br>
		<button type="submit" name="REGISTER">REGISTER</button>
	</form>
</div><br>
<div id="subjectsTable">
	<table border="1px">
		<tr>
			<th hidden="true">id</th>
			<th>Subject Code</th>
			<th>Subject Name</th>
			<th>Year</th>
			<th>Professor</th>
			<th>Options</th>
		</tr>
		@foreach ( $subjects as $subject)
		<tr>
			<td hidden="true">{{ $subject->id }}</td>
			<td>{{ $subject->subjectCode }}</td>
			<td>{{ $subject->subjectName }}</td>
			<td>{{ $subject->year }}<?php
					if( $subject->year == 1 ){
						echo "st";
					}elseif ( $subject->year == 2 ) {
						echo "nd";
					}elseif ( $subject->year == 3 ) {
						echo "rd";
					}else{
						echo "th";
					}
				?></td>
			<td>{{ $subject->maritalStatus }} {{ $subject->professorFname }} {{ $subject->professorLname }}</td>
			<td>
				<a href="/editSubject/{{ $subject->id }}"><button>Edit</button></a>
				<a href=""><button>Add Students</button></a>
			</td>
		</tr>
		@endforeach
	</table>
</div>
</body>
</html>