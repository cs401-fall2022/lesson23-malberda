<head>

<link rel="stylesheet" href="ref/styles.css">
</head>

<body class="body">
    <form method="post" action="upload_handler.php">
        <div class="title">
           <label for="blog_title">Input Blog Title</label><br>
            <input id="blog_title" name="blog_title" required><br><br><br>
        </div>
        <div class="contents">
            <label for="blog_contents">Input Blog Contents:</label><br>
            <textarea id="blog_contents" name="blog_contents" rows='45' cols='250' required></textarea><br><br>
        </div>
        <div class="submit">
            <label for submit>Submit New Blog</label> 
            <input type="submit" id='submit' name='submit'>
        </div>
    </form>
</body>