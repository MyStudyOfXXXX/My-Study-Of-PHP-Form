<html>
<head>
  <meta name="viewport" content="width=320, height=480, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
	<meta charset="utf-8">
	<title>Bulletin Board</title>
</head>
<center>
    <body>
        <?php
            $dsn = 'mysql:dbname=XXXX;host=localhost';
            $username = 'XXXXXX';
            $password = 'XXXXXX';
            $pdo = new PDO($dsn, $username, $password);
	
            $sql = "CREATE TABLE IF NOT EXISTS tbtest"
            ." ("
            . "id INT AUTO_INCREMENT PRIMARY KEY,"
            . "name char(32),"
            . "comment TEXT"
            .");";
	    $stmt = $pdo->query($sql);

            $sql ='SHOW TABLES';
            $result = $pdo -> query($sql);
            foreach ($result as $row){
              echo $row[0];
              echo '<br>';
            }
            echo "<hr>";

            $sql = $pdo -> prepare("INSERT INTO tbtest (name, comment) VALUES (:name, :comment)");
	          $sql -> bindParam(':name', $name, PDO::PARAM_STR);
	          $sql -> bindParam(':comment', $comment, PDO::PARAM_STR);
	          $name = 'name';
	          $comment = 'comment'; 
            $sql -> execute();
            
            $sql = 'SELECT * FROM tbtest';
	    $stmt = $pdo->query($sql);
            $results = $stmt->fetchAll();
            foreach ($results as $row){
              echo $row['id'].',';
              echo $row['name'].',';
              echo $row['comment'].'<br>';
              echo "<hr>";
            }

            $id = 1;
            $name = "XXXXXX";
            $comment = "XXXXXX"; 
            $sql = 'update tbtest set name=:name,comment=:comment where id=:id';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            
            $id = 2;
            $sql = '2';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

        ?>
    </body>
</center>
</html>





