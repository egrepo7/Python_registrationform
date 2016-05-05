<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<style type="text/css">
	
	</style>
</head>
<body>
	<div id="container">
		{% with messages = get_flashed_messages() %}
    		{% if messages %}
      			{% for message in messages %}
       				<p>{{message}}</p>
      			{% endfor %}
    		{% endif %}
  		{% endwith %}
		<div id="regform">
			<form action="/process_data" method="POST">
				<div>
					<label>Email:</label>
					<input type="text" name="email">
				</div>
				<div>
					<label>First Name:</label>
					<input type="text" name="first_name">
				</div>
					<div>
					<label>Last Name:</label>
					<input type="text" name="last_name">
				</div>
					<div>
					<label>Password:</label>
					<input type="text" name="password">
				</div>
				<div>
					<label>Confirm Password:</label>
					<input type="text" name="confirm_pass">
				</div>
				<input type="submit" value="Submit">				
			</form>
		</div>
	</div>
</body>
</html>