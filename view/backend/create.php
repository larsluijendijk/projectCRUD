<?php require '../public/css/header.php'; ?>


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
	<div class="form-group">
			<label for="stamnia" class="col-sm-2 col-form-label">Name:</label>
			<div class="col-sm-10">
				<input class="form-control" type="text" id="name" name="name">
			</div>
		</div>

	<div class="form-group">
			<label for="stamnia" class="col-sm-2 col-form-label">Description:</label>
			<div class="col-sm-10">
				<input class="form-control" type="text" id="description" name="description">
			</div>
		</div>

	<div class="form-group">
			<label for="stamnia" class="col-sm-2 col-form-label">Image:</label>
			<div class="col-sm-10">
				<input class="form-control" type="file" id="fileToUpload" name="fileToUpload">
			</div>
		</div>

	<div class="form-group">
			<label for="stamnia" class="col-sm-2 col-form-label">Price:</label>
			<div class="col-sm-8">
				<input class="form-control" type="text" id="price" name="price">
			</div>
		</div>

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

<?php require '../public/css/footer.php'; ?>
