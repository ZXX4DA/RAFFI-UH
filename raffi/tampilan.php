<?php
include "koneksi.php";
$query = "SELECT * FROM activities"; 
$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-3 mb-4">Activity List</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Activity Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td>
                        <strong><?php echo $row['activity_name']; ?></strong> - <?php echo $row['activity_date']; ?>
                        (<?php echo $row['activity_description']; ?>)
                    </td>
                    <td>
                        <a href="delete_activity.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm mr-2">Delete</a>
                        <a href="edit_activity.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
