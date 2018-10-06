<?php

    $email = $_POST['email']; // this is the email address of the person selected in the drop down menu
    $name = $_POST['name']; // name of the sender
    $subject = "Email from Contact form";

    $comment = $name . " " . " wrote the following:" . "\n\n" . $_POST['comment'];

    mail($email,$subject,$comment); // this is the email function

    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";

?>