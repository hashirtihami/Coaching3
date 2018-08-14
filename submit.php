<?php
session_start();
$_SESSION['email'] = $_POST['email'];
$_SESSION['name'] = $_POST['name'];
$name = $mysqli->escape_string($_POST['name']);
$address = $mysqli->escape_string($_POST['address']);
$email = $mysqli->escape_string($_POST['email']);
$zipcode= $mysqli->escape_string($_POST['zipcode']);
$deal= $mysqli->escape_string($_POST['deal']);
$contact= $mysqli->escape_string($_POST['contact']);
$msg= $mysqli->escape_string($_POST['msg']);

// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM form WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    $_SESSION['message'] = 'User with this email already exists!'; 
   header("location:  error.php");
}
else { // Email doesn't already exist in a database, proceed...
    // active is 0 by DEFAULT (no need to include it here)
    $sql1 = "INSERT INTO form (name, address, email, zipcode, deal, contact, msg ) " 
            . "VALUES ('$name', '$address', '$email', '$zipcode', '$deal', '$contact', '$msg')";

    // Add user to the database
    if ( $mysqli->query($sql1) ){
        $_SESSION['message'] =
                
                 "You have successfully submitted the form, kindly check your email for confirmation.";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = ' Message from copedia.net ';
        $message_body = '
        
        <div style="text-align:center;">
                
                Hello '.$name.',<br><br>

                <h3 style="color:#0066ff;">Thank you!!</h3><br><br>
                Follow us:<br><br>

                Instagram: https://www.instagram.com/ <br><br>

                Facebook: https://www.facebook.com/<br><br>

                For any queries feel free to email us at info@copedia.net
            </div> ';
        

        require'mailsender.php';
        header("location: payment.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: payment.php");
    }
}