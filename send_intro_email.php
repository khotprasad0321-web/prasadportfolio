<?php

if (isset($_POST['submitIntro'])) {

    $name = $_POST['userName'];
    $type = $_POST['userType'];
    $company = $_POST['companyName'];

    $to = "khotprasad0321@gmail.com";
    $subject = "New Intro Popup Submission";

    $message = "
        <h2>New Intro Details</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Found You By:</strong> {$type}</p>
        <p><strong>Company Name:</strong> {$company}</p>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Portfolio Form <no-reply@yourdomain.com>\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email Sent Successfully!";
    } else {
        echo "Failed to send email";
    }
} else {
    echo "Invalid Request";
}
?>