<!DOCTYPE html>
<html>
<head>
	<title>Edit | 
	@foreach ( $subject as $a )
		{{ $a->subjectCode }} 
		{{ $a->year }} 
	@endforeach
	</title>
</head>
<body>
<div id="editSubject">
	<form method="POST" action="/saveEditedSubject">
		{{ csrf_field() }}
		@foreach ( $subject as $a )
			<input type="number" name="id" value="{{ $a->id }}" hidden="true">
			<input type="text" name="subjectCode" value="{{ $a->subjectCode }}" required="true"> for: 
			<select name="year" required="true">
				<option selected hidden value="{{ $a->year }}">{{ $a->year }}<?php
					if( $a->year == 1 ){
						echo "st";
					}elseif ( $a->year == 2 ) {
						echo "nd";
					}elseif ( $a->year == 3 ) {
						echo "rd";
					}else{
						echo "th";
					}
				?>
				Year</option>
				<option value="1">1st Year</option>
				<option value="2">2nd Year</option>
				<option value="3">3rd Year</option>
				<option value="4">4th Year</option>
			</select><br>
			<input type="text" name="subjectName" value="{{ $a->subjectName }}" required="true"><br>
			Professor's Name:<br>
			<select name="maritalStatus" required="true">
				<option selected hidden value="{{ $a->maritalStatus }}">{{ $a->maritalStatus }}
				<option value="Ms.">Ms.</option>
				<option value="Mr.">Mr.</option>
			</select><br>
			<input type="text" name="professorFname" value="{{ $a->professorFname }}" required="true"><br>
			<input type="text" name="professorLname" value="{{ $a->professorLname }}" required="true"><br>
		@endforeach
		<button type="submit" name="SAVE">SAVE</button>
	</form>
</div><br>
</body>
</html>