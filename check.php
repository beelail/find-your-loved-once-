<?php
$db_username='root';
$db_password=''; 
$db_name='user';
$db_host='localhost';

$db=mysqli_connect($db_host,$db_username,$db_password,$db_name) or die ('could not connect to database');


$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
$password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
 

 $requete = " SELECT count(*) FROM `form` WHERE address=\"$username\" and password=\"$password\" ;";
    $rows=mysqli_fetch_row(mysqli_query($db,$requete));
  
  if($rows[0]==1){
      echo $rows[0];
header('Location: home.html');
  }
  elseif([$rows[0]==0])
  {
header('Location: login.html');
  }
mysqli_close($db);

?>

