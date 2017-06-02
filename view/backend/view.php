<?php
require("include.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost/projectCRUD/backend/overview">Overview</a>
  <a href="http://localhost/projectCRUD/backend/view">Producten</a>
  <a href="http://localhost/projectCRUD/backend/logout.php">Log out</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Instellingen</span>
<center><h1><font>Producten</font></h1><center>
<center><p><font>Hier zijn alle producten te zien</font></p><center>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>
     
</body>
</html> 
<!-- <div class="row marketing">
<div class="container"> -->
  <table border="1">
    <tr>
      <th>Foto</th>
      <th>Naam</th>
      <th>Descriptie</th>
      <th>Prijs</th>
      <th>Category</th>
      <th>Aanpassen</th>
      <th>Verwijderen</th>
    </tr>
    <?php foreach ($producten as $product) { ?>


    <tr>
      <input type="hidden" value="<?= $product['id']; ?>">
      <td><img width="150" height="150" src="<?= $product['image']?>" alt="stoel"></td>
      <td><?= $product['name']; ?></td>
      <td><?= $product['description']; ?></td>
      <td>€<?= $product['price']; ?></td>
      <td><?= $product['category']; ?></td> 
      <td><a href="<?= URL ?>backend/edit/<?= $product['id'] ?>">Edit</a></td>
      <td><a href="<?= URL ?>backend/delete/<?= $product['id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');"">Delete</a></td>
    </tr>
    <?php } ?>
  <a href="<?= URL ?>backend/create">Toevoegen</a>
<!-- </div>
</div> 