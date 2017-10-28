<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
<body>

	<form 
	input style="width: 300px; padding: 20px;  
					font-weight: bold; 
					background: #00ced1;
					color: #000; 
					border-radius: 10px; 
					border: 1px solid #999;
					font-size: 150%;"
	method="post" action="/login/index">
		Username:<br/>
		<input type="text" name="username"><br/>
		Password<br/>
		<input type="password" name="password"><br/>
		<br/>		
		<input type="submit" value="Login">
		<br/>
	<br/>
	<a href="/Reports/attempts"> Report </a>
	<br/>
	<br/>

	<a href="/login/register"> Create Account </a>
	</form>
	
</body>
</html>



    <?php require_once '../app/views/templates/footer.php' ?>
