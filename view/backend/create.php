<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	//include "../public/css/bootstrap.html";
	?>
	<meta charset="UTF-8">
	<title>Create</title>
</head>
<body>
<!-- action="<?= URL ?>client/createSave"
Zorgt er voor dat de form opdezelfde pagina blijft -->
	<form  method="post">
	Name:
	<input type="text" id="name" name="name">
	Description: 
	<input type="text" id="description" name="description">
	Image:
	<!-- type='date' zorgt ervoor dat je een datum kiest XD -->
	<input type="text" id="image" name="image">
	Price:
	<input type="text" id="price" name="price">
	<input type="submit" name="submit">
	</form>
	</div>
    </table>
    <a href="<?= URL ?>backend/index">List</a>
</div>
</body>
</html>






