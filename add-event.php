<?php
require_once "session.php";

$title1 = isset($_POST['title']) ? $_POST['title'] : "";
$title2 = ":";
$spasi =  " ";
$title3 = $_SESSION['fullname'];
$title = $title3.$spasi.$title2.$spasi.$title1;
$start = isset($_POST['start']) ? $_POST['start'] : "";
$end = isset($_POST['end']) ? $_POST['end'] : "";

$sqlInsert = "INSERT INTO tbl_events (title,start,end,user) VALUES ('".$title."','".$start."','".$end ."','".$_SESSION['fullname']."')";

$result = mysqli_query($koneksi, $sqlInsert);

if (! $result) {
    $result = mysqli_error($koneksi);
}
?>