<?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
      echo '<br /><br /><a href="logout">Logout</a>';  
 }  
 else  
 {  
      header("location:login");  
 }  
 ?>
<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Voornaam</th>
			<th>Achternaam</th>
			<th>Geslacht</th>
			<th colspan="2">Actie</th>
		</tr>
		
	</table>
	<a href="<?= URL ?>student/create">Toevoegen</a>
</div>