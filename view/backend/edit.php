<?php
require("include.php");
?>
<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>backend/createUpdate" method="post">
	
		<input type="text" name="name" value="<?= $product['name']; ?>">
		<input type="text" name="description" value="<?= $product['description']; ?>">
		<img src="../public/" alt="no image found">
		<input type="text" name="image" value="<?= $product['image']; ?>">
		<input type="text" name="price" value="<?= $product['price']; ?>">

		<input type="hidden" name="id" value="<?= $product['id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>



