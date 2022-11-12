
<?php
    echo "please help";


    try {
        $title = $POST['blog_title'];
        $contents = $POST['blog_contents'];
        echo $title. ' '.$contents . 'those were the title and contents';
        $connection = $this->getConnection();
        $q = $connection->prepare("INSERT INTO blogs (blog_title, blog)
                                    VALUES(:title, :contents);");
        $q->bindParam(":title", $title);
        $q->bindParam(":contents", $contents);
        $q->execute();
    } catch(Exception $e) {
        echo print_r($e,1);
        //exit;
    }
    echo print_r($q);
    //exit;

?>