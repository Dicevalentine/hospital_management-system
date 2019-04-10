<?php
$conn=mysqli_connect("localhost","root","","hospital_records")or die(mysqli_error($conn));
$id=$_GET['id'];
$delete_query=mysqli_query($conn,"delete from patients_records where id=$id")or die(mysqli_error($conn));
if($delete_query){
    echo "<script>window.alert('record has been deleted')</script>";
    header("refresh:0;url=dashboard.php");
}
?>