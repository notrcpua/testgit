<?php
// Database connection
$conn = new mysqli("127.0.0.1", "root", "123456", "projectend");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get video_id from the URL
$video_id = $_GET['video_id'];

// Fetch data from the database
$sql = "SELECT video_name, video_link FROM new_video_tbl WHERE video_id = $video_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Video</title>
</head>
<body>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="video_id" value="<?php echo $video_id; ?>">
        <label for="video_name">Video Name: </label>
        <input type="text" name="video_name" value="<?php echo $row['video_name']; ?>"><br>
        <label for="video_name">Video file:    </label>
        <input type="file" name="video_name" value="<?php echo $row['video_link']; ?>"><br>

 
        
        <input type="submit" value="Update">
    </form>
</body>
</html>

<?php
$conn->close();
?>