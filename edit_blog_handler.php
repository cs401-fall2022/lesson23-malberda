<head>

<link rel="stylesheet" href="ref/styles.css">
</head>

<?php

// Create connection
$conn = new mysqli("h1use0ulyws4lqr1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "wssr4ahq7pc7kym9", "b1yaul4q9uq2pymr", "t8j4x8c83vv4nopt");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
try {
    $id = $_POST['blog_id'];
    $query = "SELECT * FROM blogs WHERE id=$id ORDER BY id desc;";
    $results = $conn->query($query);
    
    echo 'printing results';
    echo print_r($results);
    
} catch(Exception $e) {
    //do nothing
}


?>
<body>
    <?php foreach ($results as $result) { ?>
    <form method="post" action="upload_handler.php">
        <div>
           <label for="blog_title">Input new Blog Title</label><br>
            <input id="blog_title" name="blog_title" value="<?php echo $result['blog_title']; ?>" required><br><br><br>
        </div>
        <div>
            <label for="blog_contents">Input new Blog Contents:</label><br>
            <textarea id="blog_contents" name="blog_contents"  rows='45' cols='250' required><?php echo $result['blog'] ?></textarea><br><br>
        </div>
        <input type="hidden" name="blog_id" value="<?php echo $id?>" />
        <div>
            <label for submit>Submit New Blog</label> 
            <input type="submit" id='submit' name='submit'>
        </div>
    </form>
    <?php } ?>
</body>