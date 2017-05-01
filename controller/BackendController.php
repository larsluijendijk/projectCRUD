<?php

require(ROOT . "model/BackendModel.php");

function view()
{
	render("backend/view");	
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
function login(){
	render("backend/login");
}
function logout(){
	render("backend/logout");
}