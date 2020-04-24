<?php
    require_once "session.php";

    $json = array();
    $sqlQuery = "SELECT * FROM tbl_events WHERE user='$_SESSION[fullname]'";

    $result = mysqli_query($koneksi, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    mysqli_close($koneksi);
    echo json_encode($eventArray);
?>