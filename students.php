<!DOCTYPE html>
<html>
<head>
	<title>STUDENTS INFORMATION</title>
</head>
<body bgcolor="#C0C7FF">

	<form action="student.txt">
		<table border="1" bgcolor="white">
		<h1>Student ID Information</h1>
		Student ID:<input type="text" name="fname" size="20"><br>
		<h2>Personal Information</h2>
		Last Name:<input type="text" name="lname" size="20">
		First Name:<input type="text" name="fname" size="20">
		Middle Name:<input type="text" name="mname" size="10">
		Birthdate: <input type="text" name="birthdate" size="10">
		Course: <input type="text" name="cname" size="10"><br>
		<input type="radio" name="ss" value="BSDA">BSDA
		<input type="radio" name="ss" value="BSCS">BSCS
		<input type="radio" name="ss" value="BSIT">BSIT<br>
		<h2>Address</h2>
		<h4>Provinces:</h4>
		<select>
			<option selected="selected">-select-</option>
			<option>Lemu Sur</option>
			<option>Lanna</option>
			<option>Abra</option>
			<option>San Gabriel</option>
		</select>
		<h4>Municipality:</h4>
		<select>
			<option selected="selected">-select-</option>
			<option>Enrile, Cagayan Valley</option>
			<option>Tabuk City, Kalinga</option>
			<option>Baguio City</option>
			<option>Tuguegarao City</option>
		</select><br>

		<h2>Incase of Emergency, Please Contact</h2>
		First Name:<input type="text" name="fname" size="20">
		Last Name:<input type="text" name="lname" size="20">
		Mobile Number:<input type="text" name="mname" size="20">
		<input type="radio" name="rr" value="parent">Parent
		<input type="radio" name="rr" value="guardian">Guardian<br>

		<input type="Submit" name="Submit">
	</form>

</body>
</html>