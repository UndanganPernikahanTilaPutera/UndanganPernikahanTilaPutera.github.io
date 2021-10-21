<?php
include "config.php";
// menyimpan data kedalam variabel
//mysql query to insert value to database


$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO tbl_ucapan (nama, pesan) VALUES ('$nama', '$pesan')";
if (mysqli_query($conn, $sql)) {
    header("location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
