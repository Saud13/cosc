<?php
	
	echo "Hello, " . $_SESSION['username']." You're logged in!";
       if($_SESSION['report']>0){
              
           echo " and failed attempts is " . $_SESSION['report'];
              
       }
	echo " Date is " . date("Y/m/d") . " Time is " . date("h/i/s");
	//for refresh page skip
	if (!empty($_SESSION['authenticated '])){ 
		header("Location: /logout");
	}
	else{
		$_SESSION['authenticated ']=true;
	}
?>
	<br/>
	<a href="/logout"> logout! </a>

<?php require_once '../app/views/templates/footer.php' ?>
