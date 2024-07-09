<?php
// Database connection
$conn = new mysqli("127.0.0.1", "root", "123456", "projectend");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is set
if (isset($_POST['video_id']) && isset($_POST['video_name']) && isset($_POST['video_link'])) {
    // Get data from the form and validate it
    $video_id = intval($_POST['video_id']);
    $video_name = trim($_POST['video_name']);
    $video_link = trim($_POST['video_link']);

    if ($video_id > 0 && !empty($video_name) && !empty($video_link)) {
        // Prepare and bind
        $stmt = $conn->prepare("UPDATE new_video_tbl SET video_name = ?, video_link = ? WHERE video_id = ?");
        $stmt->bind_param("ssi", $video_name, $video_link, $video_id);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Invalid input data";
    }
} else {
    echo "Form data not submitted properly";
}

// Close the connection
$conn->close();
?>

<a href="index.php">Back to Video List</a>
