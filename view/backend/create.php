<?php
require("include.php");
?>
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
<div class="containers">
	<form  method="post" action="<?= URL ?>backend/createSave" enctype="multipart/form-data">
	Name:
	<input type="text" id="name" name="name">
	Description: 
	<input type="text" id="description" name="description">
	Image:
	<!-- type='date' zorgt ervoor dat je een datum kiest XD -->
	<input type="file" name="fileToUpload" id="fileToUpload">
	Price:
	<input type="text" id="price" name="price">
<select name="category">
  <option value="lamp">Lamp</option>
  <option value="table">Tafel</option>
  <option value="chair">Stoel</option>
  <option value="couch">Bank</option>
  <option value="other">Diverse</option>
</select>
	<input type="submit" name="submit">
	</form>
    </table>
    <a href="<?= URL ?>backend/index">List</a>
</div>
</body>
</html>






