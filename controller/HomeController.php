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

function stoelen()
{
    render("home/stoelen", array(
    	'stoelen' => getAllStoelen()
    	));
}
function tafels()
{
    render("home/tafels", array(
        'tafels' => getAllTafels()
        ));
}

function verlichtingen()
{
    render("home/verlichtingen", array(
        'verlichtingen' => getAllVerlichtingen()
        ));
}


function diverse()
{
    render("home/diverse", array(
        'diverse' => getAllDiverse()
        ));
}
?>