<?php

require(ROOT . "model/HomeModel.php");

function index()
{
	render("home/index");	
}

function store()
{
	render("home/store", array(
		'producten' => getAllProducten()
	));
}

function contact()
{
    render("home/contact");
}
?>