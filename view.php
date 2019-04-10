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
            view_patients
        </title>
        <link rel="stylesheet" style="text/css" href="bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> 
    </head>
    <body>
        <div class="container">
            <form method="POST" action="">
             
                <div class="form-group">
                    <label for="id">Id:</label>
                    <input type="text" name="id" class="form-control" id="id" readOnly="true"  value="<?php echo $id;?>">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" id="name" readOnly="true" value="<?php echo $name;?>">
                </div>
                <div class="form-group">
                    <label for="name">NHIF number:</label>
                    <input type="text" name="nhifnumber" class="form-control" id="nhifnumber" readOnly="true" value="<?php echo $nhifnumber;?>">
                </div>
                
                    
                <div class="form-group">
                    <label for="name">Gender:</label>
                    <input type="text"  class="form-control" name="gender" id="gender" readOnly="true" value="<?php echo $gender;?>">
                    
                </div>
                       
                
                
                <div class="form-group">
                    <label for="name">Age:</label>
                        <input type="text" name="age" class="form-control" id="num" readOnly="true" value="<?php echo $age;?>">
                </div>
                <div class="form-group">
                    <label for="class">Patient number:</label>
                        <input type="text" name="patientnumber" class="form-control" id="patientnumber" readOnly="true" value="<?php echo $patientnumber;?>">
                </div>
               
                
            </form>
        </div>
    </body>

</html>
