<?php
 $server ="localhost";
 $username ="root";
  $password ="";
  $database ="review";

$connect =mysqli_connect($server,$username,$password,$database);
$showAlert = false; 
$showError = false; 
$exists=false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $user_rating = $_POST["user_rating"]; 
    $user_review = $_POST["user_review"];
    $datetime = $_POST["datetime"];

    $sql = "Select * from review_table where user_name='$user_name'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result); 
    echo $num;

    if($num == 0) {
        $sql = "INSERT INTO `review_table` ( `user_name`,`user_rating`,`user_review`,`datetime`) VALUES ('$user_name','$user_rating', '$user_review','$datetime')";
        $result = mysqli_query($conn, $sql);
                   if ($result) {
                       $showAlert = true; 
                   }
                   else{}
               }    }
  
?>

