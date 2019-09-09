<html>
<head>
  <meta name="viewport" content="width=320, height=480, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
	<meta charset="utf-8">
	<title>Test</title>
</head>
<center>
    <body>
        <form action="test4.php" method="POST" enctype="multipart/form-data">
            NAME：<input type="text" name="name"><br>
            <input type="submit" value="SEND"><br>
        </form>
    </body>
    <?php
        $comment = @$_POST["name"];
        if(!empty($comment)){ 
            $filename = "test4.txt";
            $fp = fopen($filename, "a");
            fwrite($fp, $comment."\n");
            fclose($fp);
        }
    ?>
    <?php
        $file_array = file('test4.txt');

        foreach ($file_array as $key => $value) {
          print ($key . ":" . $value . "<br>");
        }
    ?>
</center>
</html>



