<?php

function UserLoginAction(){
session_start();  
$host= "localhost";
$database  = "jenk";
$username = "root";  
$password = "";  
$connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                echo "all fields required";
           }  
           else  
           {  
                $query = "SELECT * FROM user WHERE username = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:index");  
                }  
                else  
                {  
                     header("location:login");
                }  
           }  
      }  
 }  

function pia(){
	echo "we gaan naar piazza";
}