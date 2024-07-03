<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
</head>
<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-outline-info fw-semibold">
            <a style="text-decoration: none; color: black" href="/final/hospitalmanagemant/public/insert.php">Take Appointment</a>
        </button>
        <button type="button" class="btn btn-outline-info fw-semibold">
            <a style="text-decoration: none; color: black" href="/final/hospitalmanagemant/public/index.php">Back to Home  </a>
        </button>
        </div>
        <h2 class="text-center fw-semibold mb-5">Patient Appointment List</h2>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Aaction</th>
            </tr>
            <?php
                $dbhost="localhost";
                $dbuser="root";
                $dbpass="";
                $dbname="hospitalmanagement";
                $con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
                if($con->connect_error){
                    die("connection failed");
                }
                $q="select * from appointment";
$result=$con->query($q);
while ($row=$result->fetch_assoc()){
	echo "<tr>
    <td>$row[Id]</td>
    <td>$row[Name]</td>
    <td>$row[Email]</td>
    <td>$row[Address]</td>
    <td>
        <a class='btn btn-danger' href='delete.php?name=$row[Name]'>Delete</a>
        <a class='btn btn-success' href='update.php?name=$row[Name]'>Update</a>
    </td>
</tr>
	";	
}
?>
        </table>
    </div>
</body>
</html>