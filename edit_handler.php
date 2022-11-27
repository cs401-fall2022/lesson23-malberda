
<?php

// Create connection
$conn = new mysqli("h1use0ulyws4lqr1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "wssr4ahq7pc7kym9", "b1yaul4q9uq2pymr", "t8j4x8c83vv4nopt");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
try {
    $id = $_POST['blog_id'];
    $title = $_POST['blog_title'];
    $contents = $_POST['blog_contents'];

    $sql = 
        "UPDATE blogs SET blog_title = $title, blog = $contents WHERE id=$id; 
         DELETE FROM blogs WHERE id=$id;";
         $conn->multi_query($sql);
    if($conn->multi_query($sql) == true) {
        //header("Location: https://final-project-malberda-401.herokuapp.com/"); 
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