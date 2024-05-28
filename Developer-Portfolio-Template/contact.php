<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $object = filter_var($_POST['object'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid email format";
        exit;
    }

    // Database connection
    $servername = "zj9jw5.myd.infomaniak.com";
    $username = "zj9jw5_portfolio";
    $password = "Contact@messages1";
    $dbname = "zj9jw5_contact";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        http_response_code(500);
        echo "Connection failed: " . $conn->connect_error;
        exit;
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, object, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $object, $message);

    // Execute the statement
    if ($stmt->execute()) {
        // Close connection
        $stmt->close();
        $conn->close();
        
        // Set success message
        session_start();
        $_SESSION['success_message'] = "Message envoyé avec succès!";
        
        // Redirect to home page with success message
        header("Location: index.php?success=1");
        exit;
    }

    // Close connection
    $stmt->close();
    $conn->close();
} else {
    // Handle invalid request method
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
