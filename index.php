
<head>
    <title>Final Project CS 401</title>
    <link rel="stylesheet" href="ref/styles.css">
</head>
    <div id="title" class='pageTitle'>
        This is my Final Project for CS 401
    </div>


    <?php 

// Create connection
$conn = new mysqli("h1use0ulyws4lqr1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "wssr4ahq7pc7kym9", "b1yaul4q9uq2pymr", "t8j4x8c83vv4nopt");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM blogs;";
$results = $conn->query($query);
// print_r($results);
// echo "<br><br>";
// foreach($results as $result) {
//     echo print_r($result);
//     echo "<br><br>";
// }


        foreach ($results as $result) {
            ?>
    <div class='flex-container'>

        <div class="flex-child-left">
            <?php echo $result['blog_title'];?>
        </div>
        <div class="flex-child-right">
            <?php echo $result['blog'];?>
        </div>
    </div>
<?
        }
    ?>

    <a href='/uploadBlog.php'>
        <button class="newBlogButton">Upload New Blog</button>
    </a>
    <a href='/deleteBlog.php'>
        <button class="deleteBlogButton">Delete Blog Post</button>
    </a>
    <a href='/editBlog.php'>
        <button class="editBlogButton">Edit Blog Post</button>
    </a>
<?php 



?>