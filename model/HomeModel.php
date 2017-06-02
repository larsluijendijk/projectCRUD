<?php

function getAllProducten() 
{
  $db = openDatabaseConnection();

  $sql = "SELECT * FROM product";
  $query = $db->prepare($sql);
  $query->execute();

  $db = null;

  return $query->fetchAll();

}

function getAllStoelen() 
{
  $db = openDatabaseConnection();

  $sql = "SELECT * FROM product WHERE category = 'chair'";
  $query = $db->prepare($sql);
  $query->execute();

  $db = null;

  return $query->fetchAll();

}