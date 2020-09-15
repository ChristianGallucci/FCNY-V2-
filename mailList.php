<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'includes/conn.php';

// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);

// Attempt insert query execution
$sql = "INSERT INTO main (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
	header('Location: uploadEmailList.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>