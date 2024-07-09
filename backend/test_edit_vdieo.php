<?php
// Database connection
$conn = new mysqli("127.0.0.1", "root", "123456", "projectend");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT video_id, video_name, video_link FROM new_video_tbl";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Video List</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Video ID</th>
            <th>Video Name</th>
            <th>Video Link</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["video_id"] . "</td>";
                echo "<td>" . $row["video_name"] . "</td>";
                echo "<td>" . $row["video_link"] . "</td>";
                echo "<td><a href='edit.php?video_id=" . $row["video_id"] . "'>Edit</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No videos found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>