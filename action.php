<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-s$
</head>
<body>
<div style='text-align:center'>
<?php
$u_comment=$_POST["comment"];
echo $u_comment;
$servername = "localhost";
$username = "DroneEview";
$password = "DroneEview";
$dbname = "Drone";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
echo $u_comment;
$servername = "localhost";
$username = "DroneEview";
$password = "DroneEview";
$dbname = "Drone";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
echo "GG";
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO eview (comment)
VALUES ('$u_comment')";

if (mysqli_query($conn, $sql)) {
    echo "SUCCESS";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

mysqli_close($conn);
?>
<script>document.location.href="SourceCode.php#commentArea";</script>
</div>
</body>
</html>
