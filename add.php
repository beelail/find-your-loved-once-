<?php
$first_name=$_POST["firstname"];
$last_name=$_POST["lastename"];
$father_name=$_POST["fathername"];
$mother_name=$_POST ["mothername"];
$birth=$_POST["birth"];
$location=$_POST["location"];
$address=$_POST["address"];
$number=$_POST["number"];
$password=$_POST["password"];
$info=$_POST["info"];
$pic=$_POST["picture"];

$db_username='root';
$db_password=''; 
$db_name='user';
$db_host='localhost';

$db=mysqli_connect($db_host,$db_username,$db_password,$db_name) or die ('could not connect to database');

  $sql = "INSERT INTO form
     VALUES ('$first_name','$last_name', '$father_name', '$mother_name', '$birth' , '$location' , '$address'  , '$number', '$password','$info', '$pic' )";

     if (mysqli_query($db, $sql)) {
        header('location: home.html') ; 
     } 
    else {
      header('location: fourm.html');
    }

     mysqli_close($db);

?>