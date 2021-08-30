<?php

try{
$pdo = new PDO('mysql: host=localhost; dbname=kintaikanri; charset=utf8','root', '');
$sql = 'SELECT * FROM kintai';
$stmt = $pdo ->prepare($sql);
$stmt->execute();
	
	
	while($result = $stmt->fetch()){
		$rows[] = $result;
	}

	$pdo = null;
    
}catch (PDOException $e){
	print('Error:'.$e->getMessage());
	die();
}

$pdo =null;

?>


<!DOCTYPE html>
<html lang =ja>
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=dvice-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=dege">
        <title>勤怠管理システム(管理者用）</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
   
    <div class="hed1">
        <header class="he1">   
            　　　　<h2>WEB勤怠管理システム(管理者用）</h2>
                   <a href="login.php" class="out1"><p>ログアウト</p></a>
                    </header>
                    </div>
    <div class="r1">
              <h1>勤怠情報詳細</h1>  
            </div>
              <div id="next-prev-button">
            <p id="hizuke" class= "hizuke2"></p>
           
</div>
     <form action='' method='POST'>    
          <div class="t1">
              <table >
                <tr>
                    <th class="ts1">社員ID</th>
                    <th class="ts3">出勤時間</th>
                    <th class="ts4">退勤時間</th>
                    <th class="ts6">半休</th>
                    <th class="ts7">欠勤理由</th>
                    <th class="ts8">欠勤日</th>
                  </tr>
                  <?php foreach($rows as $row){
                    ?>
                  <tr>
                    <td><?php echo $row['userid']; ?></td>
                    <td><?php echo $row['start_work']; ?></td>
                    <td><?php echo $row['end_work']; ?></td>
                    <td><?php echo $row['half_holiday']; ?></td>
                    <td><?php echo $row['absence'];  ?></td>
                    <td><?php echo $row['absence_day']; ?></td>
                  </tr>
                  <?php
                  } 
                 ?>
                 

              </table>
          </div>
</form>
        </body>

</html>