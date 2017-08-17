<?php
       // from the form
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];

       // set here
       $subject = "Contact form submitted!";
       $to = "baciko@gmail.com";

       
       $headers = "From: $email\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $message, $name);

       // redirect afterwords, if needed
       header('Location: index.html');
?>