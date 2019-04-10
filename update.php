<?php
$conn=mysqli_connect("localhost","root","","hospital_records")or die(mysqli_error($conn));
$id=$_GET['id'];
$select_query=mysqli_query($conn,"select * from patients_records where id=$id")or die(mysqli_error($conn));
foreach($select_query as $record){
    $id=$record['id'];
    $name=$record['name'];
    $nhifnumber=$record['nhifnumber'];
    $gender=$record['gender'];
    $age=$record['age'];
    $patientnumber=$record['patientnumber'];

    
    
   

}
?>

<html>
    <head>
        <title>
            update_student
        </title>
        <link rel="stylesheet" style="text/css" href="bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> 
    </head>
    <body>
        <div class="container">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="id">Id:</label>
                    <input type="text" name="id" class="form-control" id="id" readOnly="true" value="<?php echo $id;?>">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?php echo $name;?>">
                </div>
                <div class="form-group">
                    <label for="name">NHIF number:</label>
                    <input type="text" name="nhifnumber" class="form-control" id="nhifnumber" value="<?php echo $nhifnumber;?>">
                </div>
                
                    
                <div class="form-group">
                    <label for="name">Gender:</label>
                    <input type="text"  class="form-control" name="gender" id="gender" value="<?php echo $gender;?>">
                    
                </div>
                       
                
                
                <div class="form-group">
                    <label for="name">Age:</label>
                        <input type="text" name="age" class="form-control" id="num" value="<?php echo $age;?>">
                </div>
                <div class="form-group">
                    <label for="class">Patient number:</label>
                        <input type="text" name="patientnumber" class="form-control" id="patientnumber" value="<?php echo $patientnumber;?>">
                </div>
               
                <div class="form-group">
                    <input type="submit" value="submit" name="submit">
                </div>
            </form>
        </div>
    </body>

</html>
<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$nhifnumber=$_POST['nhifnumber'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$patientnumber=$_POST['patientnumber'];
$update_query=mysqli_query($conn," update patients_records set name='$name',nhifnumber='$nhifnumber',gender='$gender',age='$age',
patientnumber='$patientnumber' where id='$id'")or die(mysqli_error($conn));
//$update_query=mysqli_query($conn,"update registration set name='$name',adm='$adm',gender='$gender',age='$age',
//class='$class' where id='$id'")or die(mysqli_error($conn));

if($update_query){
    echo "<script>window.alert('update successful')</script>";
    header("refresh:0;url=dashboard.php");
}else{
    echo "<script>window.alert('failed)</script>";
    header("refresh:0;url=update.php");
}
}
?>