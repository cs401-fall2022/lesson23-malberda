
<?php
    echo "please help";

    // Create connection
    $conn = new mysqli("h1use0ulyws4lqr1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "wssr4ahq7pc7kym9", "b1yaul4q9uq2pymr", "t8j4x8c83vv4nopt");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $query = "SELECT * FROM blogs;";
    $results = $conn->query($query);
    try {
        $title = $_POST['blog_title'];
        $contents = $_POST['blog_contents'];

        $sql = "INSERT INTO blogs (blog_title, blog) VALUES ('$title','$contents');";
        if($conn->query($sql) == true) {
            echo "new record created successfully";
        }
        else {
            echo "error" . $sql."<br>" . $conn->error;
        }
    } catch(Exception $e) {
        exit;
    }
    echo print_r($sql);
    exit;

?>