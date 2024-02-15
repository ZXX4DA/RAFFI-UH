<?php
include "koneksi.php";
if(isset($_POST['add_activity'])){
    $activity_name = $_POST['activity_name'];
    $activity_date = $_POST['activity_date'];
    $activity_description = $_POST['activity_description'];
    
    $query = "INSERT INTO activities (activity_name, activity_date, activity_description) VALUES ('$activity_name', '$activity_date', '$activity_description')";
    $mysqli->query($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Activity</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Add Activity</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="activity_name">Activity Name</label>
                <input type="text" class="form-control" id="activity_name" name="activity_name" placeholder="Activity Name">
            </div>
            <div class="form-group">
                <label for="activity_date">Date</label>
                <input type="date" class="form-control" id="activity_date" name="activity_date">
            </div>
            <div class="form-group">
                <label for="activity_description">Activity Description</label>
                <textarea class="form-control" id="activity_description" name="activity_description" rows="3" placeholder="Activity Description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-blue" name="add_activity">Add Activity</button>
        </form>
    </div>
    <style>
        .btn-blue {
            background-color: blue;
            border-color: blue;
        }

        .btn-blue:hover {
            background-color: darkblue;
            border-color: darkblue;
        }
    </style>
</body>
</html>
