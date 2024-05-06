<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8f44eb59ac.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="uploads/logo2.ico">
    <title>Gastenboek</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="container1">
        <div class="header">
        <h2>Gastenboek</h2>
        <a href="form.html"><h2>Bericht...<i class="fa-regular fa-pen-to-square"></i></h2></a>
        </div>
        <?php
        // Load entries from JSON file
        $entries = [];
        if (file_exists('entries.json')) {
            $entries = json_decode(file_get_contents('entries.json'), true);
        }

        if (!empty($entries)) {
            foreach ($entries as $entry) {
                echo "<div class='entry'>";
                echo "<div class='entr-mess'>";
                echo "<h5>" . $entry['name'] . "</h5>";
                echo "<h5>" . $entry['email'] . "</h5>" . "<br> <br> <br>  ";
                echo "<h4>" . $entry['message'] . "</h4>" . "<br> <br> <br>";
                echo "<h6>" . $entry['date'] . "</h6>";
                echo "</div>";
                if (!empty($entry['image'])) {
                    echo "<img src='uploads/" . $entry['image'] . "' alt='Uploaded Image'>";
                }
                echo "</div>";
            }
        } else {
            echo "<p>Er zijn geen berichten.</p>";
        }

        if(isset($_GET['error'])) {
            echo "<script>alert('{$_GET['error']}');</script>";
        }
        ?>
        
    </div>

</body>
</html>

