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

function getAllTafels()
{
  $db = openDatabaseConnection();

  $sql = "SELECT * FROM product WHERE category = 'table'";
  $query = $db->prepare($sql);
  $query->execute();

  $db = null;

  return $query->fetchAll();
}

function getAllVerlichtingen()
{
  $db = openDatabaseConnection();

  $sql = "SELECT * FROM product WHERE category = 'lamp'";
  $query = $db->prepare($sql);
  $query->execute();

  $db = null;

  return $query->fetchAll();
}

function getAllDiverse()
{
  $db = openDatabaseConnection();

  $sql = "SELECT * FROM product WHERE category = 'other'";
  $query = $db->prepare($sql);
  $query->execute();

  $db = null;

  return $query->fetchAll();
}