<?php

require(ROOT . "model/BackendModel.php");

function view()
{
	render("backend/view", array(
		'producten' => getAllProducten()
	));
}
function overview()
{
	render("backend/overview");	
}
function index()
{
	render("backend/index", array(
		'producten' => getAllProducten()
	));
}
function login()
{
	render("backend/login");
}
function logout()
{
	render("backend/logout");
}
function create()
{ 	
	if (isset($_POST['submit'])) {
		createClient($_POST['name'], $_POST['description'], $_POST['image'], $_POST['price']);
	}
	render("backend/create");
}
function createSave()
{
	uploadfile($_FILES);
	if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['image']) && isset($_POST['price'])){
		var_dump($_POST);
		createClient($_POST['name'], $_POST['description'], $_POST['image'], $_POST['price']);
	}
}
function createUpdate()
{
		if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description']) && isset($_POST['image']) && isset($_POST['price'])){
		updateProduct($_POST['id'], $_POST['name'], $_POST['description'], $_POST['image'], $_POST['price']);
	}
	header("Location:" . URL . "backend/view");

}
function edit($id)
{
	render("backend/edit",array(
	'product' => showUpdateProduct($id)
	));
	if (isset($_POST['submit'])) {
		var_dump($_POST);
		createUpdate();
	}

}	

