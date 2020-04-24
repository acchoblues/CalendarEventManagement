<?php
require_once "session.php";

$id = $_POST['id'];
$sqlDelete = "DELETE from tbl_events WHERE id=".$id;

mysqli_query($koneksi, $sqlDelete);
echo mysqli_affected_rows($koneksi);

mysqli_close($koneksi);
?>