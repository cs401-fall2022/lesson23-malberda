<head>

</head>

<body>

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
            <?php echo "This is blog number ".$result['id'].':';?>
            <?php echo $result['blog_title'];?>
        </div>
        
    </div>
    <? 
        }
 ?>
    <form method="post" action="delete_handler.php">
        <div>
           <label for="blog_id">Input Blog ID for Deletion</label><br>
            <input id="blog_id" name="blog_id" required><br><br><br>
        </div>
        <div>
            <input type="submit" id='submit' name='submit'>
        </div>
    </form>
</body>