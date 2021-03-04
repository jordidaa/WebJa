<?php 
if(isset($_POST['submit'])){
    $to = "jordidaa@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $nom = $_POST['nom'];
    $telefon = $_POST['telefon'];
    $missatge = $_POST['telefon'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $missatge = $nom . " " . $telefon . " wrote the following:" . "\n\n" . $_POST['missatge'];
    $missatge2 = "Here is a copy of your message " . $nom . "\n\n" . $_POST['missatge'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$missatge,$headers);
    mail($from,$subject2,$missatge2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $nom . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>