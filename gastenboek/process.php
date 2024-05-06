<?php
session_start(); // Start de sessie


function canPostMessage() {
    if (!isset($_SESSION['last_message_time'])) {
        return true; 
    }

    $last_message_time = $_SESSION['last_message_time'];
    $current_time = time();
    $elapsed_time = $current_time - $last_message_time;
    return $elapsed_time >= (24 * 60 * 60);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    if (!canPostMessage()) {
        echo "<script>alert('You can only post a message every 24 hours.');</script>";
        // Redirect the user after displaying the alert
        header("Location: index.php?error=You can only post a message every 24 hours.");
        exit();
    }

    
    $name = htmlspecialchars($_POST['name']);
    $email =  htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

   
    
    // Check if image is uploaded
    $image = null;
    if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        // Move uploaded image to uploads directory
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }

    $filename = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image'];

        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $max_size = 1 * 1024 * 1024; // 1MB
        if (in_array($image['type'], $allowed_types) && $image['size'] <= $max_size) {
            // Generate a unique filename to prevent overwriting
            $filename = uniqid() . '_' . $image['name'];

            move_uploaded_file($image['tmp_name'], 'uploads/' . $filename);
        } else {
            header("Location: form.html?error=Invalid file. Please upload a JPEG, PNG, or GIF file (max size 1MB).");
            exit();
        }
    }



    // Create array with guestbook entry
    $entry = array(
        'name' => $name,
        'email' => $email,
        'message' => $message,
        'image' => $image,
        'date' => date('d-m-Y H:i') // Add timestamp 
    );

    // Load existing entries or create an empty array
    $entries = [];
    if (file_exists('entries.json')) {
        $entries = json_decode(file_get_contents('entries.json'), true);
    }

    // Append new entry
    $entries[] = $entry;

    // Save entries to JSON file
    file_put_contents('entries.json', json_encode($entries, JSON_PRETTY_PRINT));

    // Markeer de tijd van de laatste inzending
    $_SESSION['last_message_time'] = time(); 


    // Redirect terug naar het gastenboek formulier
    header("Location: index.php");
    exit();
} else {
    echo "Error: Formulier inzending methode niet geldig.";
}
?>
