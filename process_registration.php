<?php

if(isset($_POST['submit'])){
    $conn=mysqli_connect("localhost","root","","hospital_records")or die(mysqli_error($conn));
    $name=$_POST['name'];
    $nhifnumber=$_POST['nhifnumber'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $patientnumber=$_POST['patientnumber'];
    
    echo $name;
    echo $nhifnumber;
    echo $gender;
    echo $age;
    echo $patientnumber;

    $insert=mysqli_query($conn,"INSERT INTO patients_records(name,nhifnumber,gender,age,patientnumber)VALUES('".$name."','".$nhifnumber."','".
    $gender."','".$age."','".$patientnumber."')") or die(mysqli_error($conn));

    if($insert){
        echo "<script>window.alert('record inserted')</script>";
        header("refresh:0;url=dashboard.php");
    }else{
        echo "<script>window.alert('record not inserted')</script>";
       header("refresh:0;url=registration.php");
    }

}



?>