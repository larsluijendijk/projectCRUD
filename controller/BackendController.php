<?php

require(ROOT . "model/BackendModel.php");

function index()
{
	render("backend/index");
}
function login(){
	render("backend/login");
}
function logout(){
	render("backend/logout");
}