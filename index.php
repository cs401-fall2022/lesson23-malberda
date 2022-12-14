<!-- this is a heroku project viewable at 
https://final-project-malberda-401.herokuapp.com/
-->
<head>
    <title>Final Project CS 401</title>
    <link rel="stylesheet" href="ref/styles.css">
</head>
    <!-- <div id="title" class='pageTitle'>
        This is my Final Project for CS 401
    </div> -->

    <div class='header'>
        <h2> Michael Alberda's Blog </h2>
    </div>

    <body>
    <a href='/uploadBlog.php'>
        <button class="newBlogButton">Upload New Blog</button>
    </a>
    <a href='/editBlog.php'>
        <button class="editBlogButton">Edit Blog Post</button>
    </a>

    <a href='/deleteBlog.php'>
        <button class="deleteBlogButton">Delete Blog Post</button>
    </a>
    <?php 

// Create connection
$conn = new mysqli("h1use0ulyws4lqr1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "wssr4ahq7pc7kym9", "b1yaul4q9uq2pymr", "t8j4x8c83vv4nopt");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM blogs ORDER BY id desc;";
$results = $conn->query($query);



        foreach ($results as $result) {
            ?>
    <div class='flex-container'>

        <div class="flex-child-left">
            <?php echo $result['blog_title'];?>
        </div>
        <div class="flex-child-right">
            <?php echo $result['blog'].'<br>';?>

        </div>
    </div>
<?php
        }
    ?>

</body>
