<?php
// Hapus kegiatan
if(isset($_GET['delete_activity'])){
    $id = $_GET['delete_activity'];
    $query = "DELETE FROM activities WHERE id=$id";
    $mysqli->query($query);
}
?>
