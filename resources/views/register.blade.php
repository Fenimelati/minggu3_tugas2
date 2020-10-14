<html>
	<head>
		<title> Register Page </title>
	</head>

	<body>
			<h2><strong> Buat Account Baru! </strong></h2>
			<h4> Sign Up Form </h4>
			<form action="/welcome" method="POST">
			@csrf
			<label for="firstName"> First name: </label> <br><br>
			<input type="text" id="firstName" name="firstName" /><br><br>
      		<label for="lastName">Last name:</label><br><br>
       		<input type="text" id="lastName" name="lastName" /><br><br>

			
			<label> Gender : </label> <br><br>
			<input type="radio" name="Gender" value="0"> Male <br>
			<input type="radio" name="Gender" value="1"> Female <br>
			<input type="radio" name="Gender" value="2"> Other <br><br>
			
			<label> Nationality: </label> <br><br>
			<select>
				<option> Indonesian </option>
				<option> South Korea </option>
				<option> Singapore </option>
				<option> Malaysian </option>
				<option> United Kingdom </option>
			</select> <br><br>
			
			<label> Language Spoken:</label> <br><br>
			<input type="checkbox"> Indonesia <br>
			<input type="checkbox"> English <br>
			<input type="checkbox"> Other <br><br>
			
			<label> Bio: </label> <br><br>
			<textarea name="" id="" cols="40" rows="10"></textarea> 
			<br>	
			<a href="{{ url('/welcome') }}">
				<button type="button"> Sign Up </button>
			</a> </br>
		</form>
	</body>
</html>