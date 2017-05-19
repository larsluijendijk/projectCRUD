<?php

function userLoginAction(){
	session_start();  
	$host= "localhost";
	$database  = "jenk";
	$dbusername = "root";  
	$dbpassword = "";  
	$connect = new PDO("mysql:host=$host; dbname=$database", $dbusername, $dbpassword);  
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  	if(isset($_POST["login"]))  
  	{  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                echo "all fields required";
           }  
           else  
           {  
                // bestaat de gebruiker?
                $user = getUser($_POST["username"]);
	                if($user != null) {
	                	$password = getPassword($user);
						//controleer zijn wachtwoord
						if (verifyPassword($_POST["password"], "admin")) {
							echo "yup";
							//header("location:index");
						} 
						else{
						echo"Verify failed! Please, insert the correct data:";
						echo$_POST["password"];
						}
	                }	
           }
    }
      //header("location:login");
 }


function getUser($login_username) {
	// haal de gebruiker op uit de database
	$connect = openDatabaseConnection();
	$query = "SELECT * FROM user WHERE username = '$login_username'";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"]
                          )
                     );
                $username = $statement->fetch(PDO::FETCH_ASSOC);
				return $username;
}

function getPassword($user){
	$connect = openDatabaseConnection();
	$query = "SELECT password FROM user WHERE username = '$user'";  
                $statement = $connect->prepare($query);  
				$statement->execute();
                $password = $statement->fetch(PDO::FETCH_ASSOC);
				return $password;
}

function verifyPassword($login_password, $user_password) {
	if (password_verify($login_password, $user_password) ) {
		return true;
	}
	else{
		return false;
	}
	return false;
}

function getAllProducten() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM product";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}

function pia(){
	echo "we gaan naar piazza";
}


function createClient($name, $description, $image, $price) 
{
  $db = openDatabaseConnection();
  // echo test om te kijken of ie binnen komtaijh
  var_dump($_POST);
  $sql = "INSERT INTO product(name, description, image, price) VALUES (:name, :description, :image, :price)";
  $query = $db->prepare($sql);
  $query->execute(array(
    ':name' => $name,
    ':description' => $description,
    ':image' => $image,
    ':price' => $price
    ));

  $db = null;
  header("Location:" . URL . "backend/view");


}

function delete($id)
{
  if (isset($id)) {
    deleteProduct($id);
  }
}

function deleteProduct($id) 
{
    $db = openDatabaseConnection();

    $sql = "DELETE FROM product WHERE id=:id ";
    $query = $db->prepare($sql);
    $query->execute(array(
        ':id' => $id
        ));

    $db = null;
    header("Location:" . URL . "backend/view");
}

function updateProduct($id, $name, $description, $image, $price) 
{
  $db = openDatabaseConnection();

    $query = "update product set name='$name', description='$description', image='$image', price='$price' where id=$id";
    $result = $db->query($query);

  $db = null;
}
// show the row that has been clicked to update.
function showUpdateProduct($id){

  if (isset($id)):
      $db = openDatabaseConnection();

      $query=$db->prepare("SELECT id, name, description, image, price FROM product WHERE id=$id");
      $query->bindParam(':param', $param);
      $query->execute();

      $result = $query -> fetch();
      return $result;
    endif;
}
?>