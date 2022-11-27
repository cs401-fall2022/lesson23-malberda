
<?php

// Create connection
$conn = new mysqli("h1use0ulyws4lqr1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "wssr4ahq7pc7kym9", "b1yaul4q9uq2pymr", "t8j4x8c83vv4nopt");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
try {
    $id = $_POST['blog_id'];

    $sql = "DELETE FROM blogs WHERE id=$id;";
    if($conn->query($sql) == true) {
        //echo "new record deleted successfully";
        header("Location: https://final-project-malberda-401.herokuapp.com/"); 
        exit;
    }
    else {
        echo "error" . $sql."<br>" . $conn->error;
    }
} catch(Exception $e) {
    exit;
}
exit;

?>