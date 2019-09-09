<html>
<head>
  <meta name="viewport" content="width=320, height=480, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
	<meta charset="utf-8">
	<title>test</title>
</head>
<center>
    <body>
        <form action="test5.php" method="POST" enctype="multipart/form-data">
            NAME：<input type="text" name="name"><br>
            COMMENT：<textarea name="comment"></textarea><br>
            <input type="submit" value="SEND"><br>
        </form>
    </body>
    <?php

        $name = @$_POST["name"];
        $comment = @$_POST["comment"];

        $y = date("Y");
        $m = date("m");
        $d = date("d");

        $h = date("G");
        $i = date("i");
        $s = date("s");
        
        $time = $y.'/'.$m.'/'.$d.' '.$h.':'.$i.':'.$s;

        if(!empty($name) && !empty($comment)){  
            $filename = "test5.txt"; //empty .txt
            $fp = fopen($filename, "a");
            fwrite($fp, $name."<>".$comment.'<>'.$time."\n");
            fclose($fp);
        }
        
        $file_array = file('test5.txt');
        
        foreach($file_array as $key => $value){
            echo $key+1, '<>'.$value.'<br>';
        }

    ?>
</center>
</html>



