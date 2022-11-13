
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
echo "this test is working 1";
    try {
        echo "this test is working 2";
        echo print_r($_POST);
        echo "this test is working 3";
        $title = $_POST['blog_title'];
        echo "this test is working 4";
echo $title . '<br>';
echo "this test is working 5";
        $contents = $_POST['blog_contents'];
        echo "this test is working 6";
        echo $contents . '<br>';

        $sql = "INSERT INTO blogs (blog_title, blog) VALUES ('$title','$contents');";
        if($conn->query($sql) == true) {
            echo "new record created successfully";
        }
        else {
            echo "error" . $sql."<br>" . $conn->error;
        }
    } catch(Exception $e) {
        echo print_r($e,1);
        //exit;
    }
    echo print_r($sql);
    //exit;

?>