<html>
    <head>
        <title>
            student registration
        </title>
        <link rel="stylesheet" style="text/css" href="bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> 
    </head>
    <body>
        <form name="registration" action="process_registration.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="name">NHIF number:</label>
                <input type="text" name="nhifnumber" class="form-control" id="nhifnumber">
            </div>
            <div class="form-group">
                <label for="name">Gender:</label>
                <input type="text" name="gender" class="form-control" id="gender">  
            </div>
            
            <div class="form-group">
                <label for="name">Age:</label>
                <input type="number" name="age" class="form-control" id="age">
            </div>
            
            <div class="form-group">
                <label for="class">Patient number:</label>
                <input type="number" name="patientnumber" class="form-control" id="patientnumber">
            </div>
            
            <div class="form-group">
                <input type="submit" value="submit" name="submit">
            </div>
        </form>
    </body>
</html>

