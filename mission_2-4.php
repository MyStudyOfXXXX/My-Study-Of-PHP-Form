<html>
<head>
  <meta name="viewport" content="width=320, height=480, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes"><!-- for smartphone. ここは一旦、いじらなくてOKです。 -->
	<meta charset="utf-8"><!-- 文字コード指定。ここはこのままで。 -->
	<title>Test</title>
</head>
<center>
    <body>
        <form action="mission_2-4.php" method="POST" enctype="multipart/form-data">
            名前：<input type="text" name="name"><br>
            <input type="submit" value="SEND"><br>
        </form>
    </body>
    <?php
        $comment = @$_POST["name"];
        if(!empty($comment)){  
            if($comment == "完成！"){
                $comment = "おめでとう！";
            }
            $filename = "mission_2-4.txt";
            $fp = fopen($filename, "a");
            fwrite($fp, $comment."<br>");
            fclose($fp);
        }
    ?>
    <?php
        $file_array = file('mission_2-4.txt');
 
        echo $file_array[0].'<br>';
        echo $file_array[1].'<br>';
        echo $file_array[2].'<br>';
        
        foreach ($file_array as $key => $value) {
          print ($key . ":" . $value . "<br>");
        }
    ?>
</center>
</html>



