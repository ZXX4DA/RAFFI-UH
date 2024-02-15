<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Event Date and Time Picker</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
    <h2>Pilih Tanggal dan Waktu Acara</h2>
    <form action="process.php" method="post">
        <label for="event_date">Tanggal Acara:</label>
        <input type="date" id="event_date" name="event_date" required><br><br>
        <label for="event_time">Waktu Acara:</label>
        <input type="time" id="event_time" name="event_time" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</div>
</body>
</html>
