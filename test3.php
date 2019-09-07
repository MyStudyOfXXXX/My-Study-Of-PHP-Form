<html>
<head>
  <meta name="viewport" content="width=320, height=480, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
	<meta charset="utf-8">
	<title>Test</title>
</head>
<center>
    <body>
        <form action="test3.php" method="POST" enctype="multipart/form-data">
            NAME：<input type="text" name="name"><br>
            <input type="submit" value="SEND"><br>
        </form>
    </body>
    <?php
        $comment = @$_POST["name"];
        if(!empty($comment)){ 
            $filename = "test3.txt";
            $fp = fopen($filename, "a");
            fwrite($fp, $comment."<br>");
            fclose($fp);
        }
    ?>
    <?php
        $fp = fopen("test3.txt", "r");
        while ($temp = fgets($fp)) {
            if(!empty($temp)){
                echo "$temp<br>";
            }
        }
        fclose($fp);
    ?>
</center>
</html>



