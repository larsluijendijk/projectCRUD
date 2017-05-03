<?php
require("include.php");
?>
<!DOCTYPE html>
<html>
<head>
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
  <a href="http://localhost/ProjectCRUD/backend/overview">Overview</a>
  <a href="http://localhost/ProjectCRUD/backend/view">Producten</a>
  <a href="http://localhost/ProjectCRUD/backend/logout">Log out</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Instellingen</span>
<center><h1><font>Producten</font></h1><center>
<center><p><font>Hier zijn alle producten te zien</font></p><center>


<img src="https://img.clipartfest.com/8cbd203baf35658c2d3ad36bb9a3318b_light-bulb-lightbulb-clipart-transparent-background_594-596.png" alt="Mountain View" style="width:400px;height:428px;">

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