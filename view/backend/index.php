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
    <?php foreach ($producten as $product) { ?>
    <tr>
      <input type="hidden" value="<?= $product['id']; ?>">
      <td><?= $product['name']; ?></td>
      <td><?= $product['description']; ?></td>
      <td><?= $product['image']; ?></td>
    </tr>
    <?php } ?>
	<a href="<?= URL ?>student/create">Toevoegen</a>
</div>