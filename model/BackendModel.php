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
						    //controleer zijn wachtwoord
						        if (verifyPassword($_POST["password"], $user['password'])) 
                    {
							       $_SESSION["username"] = $_POST["username"];
							       header("location:overview");
						        } 
					   	else
            {
						  echo"Verify failed! Please, insert the correct data.";
						}
          }	
       }
    }
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
    $user = $statement->fetch(PDO::FETCH_ASSOC);
	
	return $user;
}

function verifyPassword($login_password, $user_password) {
	if (password_verify($login_password, $user_password) ) {
		return true;
	}
	else{
	return false;
	}
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


function createClient($name, $description, $file_destination, $price) 
{
  $db = openDatabaseConnection();
  // echo test om te kijken of ie binnen komt
  var_dump($_POST);
  $sql = "INSERT INTO product(name, description, image, price) VALUES (:name, :description, :file_destination, :price)";
  $query = $db->prepare($sql);
  $query->execute(array(
    ':name' => $name,
    ':description' => $description,
    ':file_destination' => $file_destination,
    ':price' => $price
    ));

  $db = null;
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
}

function getProductById($id){
    $db = openDatabaseConnection();
  // prepare query and execute
  $sql = "SELECT * FROM product WHERE id=:id";
  $query = $db->prepare($sql);
  $query->execute(array(
    ':id' => $id
  ));
  $db = null;
  return $query->fetch(PDO::FETCH_ASSOC); 
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

function uploadFile ($file){
  $file_destination = null;
    //var_dump($file);
    //die();
    
	// Files Inhoud:
	if ($file['size'] == 0) return null;
	$file_name=$file['name'];
	$file_tmp=$file['tmp_name'];
	$file_size=$file['size'];
	$file_error=$file['error'];    
	    
	// File extension:

	// Dit maakt $file_name naar een Array:
	$file_ext = explode('.', $file_name);  
	// End pakt het einde van de array, en dat is de $file_ext, en de extensies zijn alleen lowercase:
	$file_ext = strtolower(end($file_ext));

	$allowed = array("png", "jpg", "gif");
	// in_array kijkt of de value in een Array is | $file_ext is in de $allowed array | jpg mag wel, word doc mag niet:
	if(in_array($file_ext, $allowed)){
        // TODO $_SESSION['errors'][] = "verboden extentie";
	// Kijkt of er een error is:
	    if($file_error === 0){
            // Todo errorhandling
	// Als de file kleiner is dan 2MB:
	        if($file_size <= 2097152){
                // Todo errorhandling
	// De naam van de file wordt random gemaakt:
	            $file_name_new = uniqid('',true) . '.' . $file_ext;
	// De plek waar het opgeslagen wordt:
	            $file_destination = '../public/img/' . $file_name_new;
	// Als het verplaatsen van de file gelukt is:
	            if (move_uploaded_file($file_tmp, $file_destination)) {
                var_dump('upload gelukt!');
              }
            }
        }
    }
    return $file_destination;
}
?>