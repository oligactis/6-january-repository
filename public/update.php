<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <h2 class="mt-5 text-center">Update Appointment</h2>    
    <?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "hospitalmanagement";
        $con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $n = $_POST['original_name'];
            $update = "UPDATE appointment SET Id='$id', Name='$name', Email='$email', Address='$address' WHERE Name='$n'";
            if ($con->query($update) === TRUE) {
              header("location: /final/hospitalmanagemant/public/appointment.php");
                exit;
            } else {
                echo "Error updating record: " . $con->error;
            }
        }

        if (isset($_GET['name'])) {
            $n = $_GET['name'];
            $q = "SELECT * FROM appointment WHERE Name='$n'";
            $result = $con->query($q);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['Id'];
                    $name = $row['Name'];
                    $email = $row['Email'];
                    $address = $row['Address'];    
                }
            } else {
                echo "No record found";
            }
        }
    ?>

    <div class="container my-5">
        <form method="post">
            <input type="hidden" name="original_name" value="<?php echo $name; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label fw-semibold" for="s_id">ID</label>
                <div class="col-sm-6">
                    <input type="number" id="s_id" name="id" value="<?php echo $id ?>"><br>
                </div>
            </div>
             
            <!-- for name  -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label fw-semibold" for="s_name">Name</label>
                <div class="col-sm-6">
                    <input type="text" id="s_name" name="name" value="<?php echo $name ?>" required><br>
                </div>
            </div>
            
            <!-- for email  -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label fw-semibold" for="s_email">Email</label>
                <div class="col-sm-6">
                    <input type="email" id="s_email" name="email" value="<?php echo $email ?>" required><br>
                </div>
            </div>
            
            <!-- for address  -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label fw-semibold" for="s_address">Address</label>
                <div class="col-sm-6">
                    <input type="text" id="s_address" name="address" value="<?php echo $address ?>"><br>
                </div>
            </div>
            
            <div class="">
                <button type="submit" class="btn btn-info font-semibold">Submit</button>
            </div>
        </form> 
    </div>
</body>
</html>