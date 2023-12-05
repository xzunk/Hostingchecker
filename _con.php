<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $subject = $_POST["subject"];
    $subject = $_POST["email"];

    // Email recipient
    $recipient_email = "hello@cliqsurge.com";

    // Email subject
    $email_subject = "Form Submission";

    // Email message
    $email_message = "First Name: " . $firstname . "\n";
    $email_message .= "Last Name: " . $lastname . "\n";
    $email_message .= "Email: " . $email . "\n";
    $email_message .= "Subject: " . $subject . "\n";

    // Send the email
    if (mail($recipient_email, $email, $email_subject, $email_message)) {
        $success_message = "Thank you! Your form has been submitted.";
    } else {
        $error_message = "Oops! Something went wrong.";
    }
}
?>
