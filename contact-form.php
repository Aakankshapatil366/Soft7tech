<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data with null coalescing operator to avoid warnings
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $phoneNumber = $_POST['mobileNumber'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validation
    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($message)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
            exit;
        }

        // Prepare email
        $to = "aakankshapatil366@gmail.com"; // Replace with your email address
        $subject = "New Message from " . $firstName . " " . $lastName;
        $body = "You have received a new message:\n\n" .
                "First Name: " . $firstName . "\n" .
                "Last Name: " . $lastName . "\n" .
                "Email: " . $email . "\n" .
                "Mobile Number: " . $phoneNumber . "\n\n" .
                "Message:\n" . $message;

        // Email headers
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Message sending failed.";
        }
    } else {
        echo "Please fill in all required fields.";
    }
}
?>
