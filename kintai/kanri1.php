<!DOCTYPE html>
<html lang =ja>
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=dvice-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=dege">
        <title>勤怠管理システム</title>
        <link rel="stylesheet" href="kanri1.css">
    </head>
    <body>
    <?php  
 
 session_start();
 
 
 $errorMessage = "";
 $tureMessage ="";
 
 
 if (isset($_POST['login1'])) {
  if (empty($_POST["userid"])) {
    $errorMessage = '※ユーザーIDが未入力です。';
    } 

$userid = $_POST['userid'];



if (!empty($_POST['userid'])) {
try {
$pdo = new PDO('mysql: host=localhost; dbname=kintaikanri; charset=utf8','root', '');
$stmt = $pdo->prepare('SELECT count(*) FROM kintaikanri.kintai WHERE userid = ? ');
$stmt->execute(array($userid));
$row = $stmt->fetch();
$stmt = null;
$pdo = null;
if($row[0] != 0) {

  $_SESSION['username'] = $userid;
  

  header('Location: http://localhost/kintai/kanri2.php');
  exit;
} else {
$errorMessage = '※管理者IDに誤りがあります。';
}
 
} catch (PDOException $e) {
echo $e->getMessage();
exit;
}
}
}

 if (isset($_POST['login2'])) {
    if (empty($_POST["userid"])) {
      $errorMessage = '※ユーザーIDが未入力です。';
      }
  
  $userid =$_POST['userid'];
  
   
  
  if (!empty($_POST['userid'])) {
  try {
  $pdo = new PDO('mysql: host=localhost; dbname=kintaikanri; charset=utf8','root', '');
  $stmt = $pdo->prepare('SELECT count(*) FROM kintai WHERE userid = ? ');
  $stmt->execute(array($userid)); 
  $row = $stmt->fetch();
  $stmt = null;
  $pdo = null;
  if($row[0] != 0) {
    $_SESSION["username"] = $userid;
    header('Location: http://localhost/kintai/kanri3.php');
    exit;
  } else {
  $errorMessage = '※管理者IDに誤りがあります。';
  }
   
  } catch (PDOException $e) {
  echo $e->getMessage();
  exit;
  }
  }
  }
 
  if (isset($_POST['login3'])) {
    if (empty($_POST["userid"])) {
      $errorMessage = '※ユーザーIDが未入力です。';
      } 
  
  $userid = $_POST['userid'];
  
   
  
  if (!empty($_POST['userid'])) {
  try {
  $pdo = new PDO('mysql: host=localhost; dbname=kintaikanri; charset=utf8','root', '');
  $stmt = $pdo->prepare('SELECT count(*) FROM kintai WHERE userid = ? ');
  $stmt->execute(array($userid)); 
  $row = $stmt->fetch();
  $stmt = null;
  $pdo = null ;
  if($row[0] != 0) {
    $_SESSION["username"] =$userid;
  header('Location: http://localhost/kintai/kanri4.php');
  exit;
  } else {
  $errorMessage = '※管理者IDに誤りがあります。';
  }
   
  } catch (PDOException $e) {
  echo $e->getMessage();
  exit;
  }
  }
  }

  if (isset($_POST['login4'])) {
    if (empty($_POST["userid"])) {
      $errorMessage = '※ユーザーIDが未入力です。';
      } 
  
  $userid = $_POST['userid'];
   
  
  if (!empty($_POST['userid'])) {
  try {
  $pdo = new PDO('mysql: host=localhost; dbname=kintaikanri; charset=utf8','root', '');
  $stmt = $pdo->prepare('SELECT count(*) FROM kintai WHERE userid = ? ');
  $stmt->execute(array($userid)); 
  $row = $stmt->fetch();
  $stmt = null;
  $pdo = null;
  if($row[0] != 0) {
  $_SESSION['username'] = $userid;
  header('Location: http://localhost/kintai/kanri5.php');
  exit;
  } else {
  $errorMessage = '※管理者IDに誤りがあります。';
  }
   
  } catch (PDOException $e) {
  echo $e->getMessage();
  exit;
  }
  }
  }
 
  
   ?>
   <?php
  date_default_timezone_set('Asia/Tokyo');
if (isset($_POST['start1'])) {
    $pdo = new PDO('mysql: host=localhost; dbname=kintaikanri; charset=utf8','root', '');
    $stmt = $pdo->prepare('UPDATE kintai SET start_work = :star WHERE userid = :userid');
    $params = array(':star' =>date('Y-m-d H:i:s'),':userid' =>$_SESSION['username']);
    $res = $stmt->execute($params);
    $pdo = null;
}
?>
<?php
  date_default_timezone_set('Asia/Tokyo');
if (isset($_POST['end1'])) {
    $pdo = new PDO('mysql: host=localhost; dbname=kintaikanri; charset=utf8','root', '');
    $stmt = $pdo->prepare('UPDATE kintai SET end_work = :end1 WHERE userid = :userid');
    $params = array(':end1' =>date('Y-m-d H:i:s'),':userid' =>$_SESSION['username']);
    $res = $stmt->execute($params);
    $pdo = null;
}
?>
<?php
  date_default_timezone_set('Asia/Tokyo');
if (isset($_POST['absence1'])) {
    $pdo = new PDO('mysql: host=localhost; dbname=kintaikanri; charset=utf8','root', '');
    $stmt = $pdo->prepare('UPDATE kintai SET absence = :absence1,absence_day = :absence2 WHERE userid = :userid');
    $params = array(':absence1' =>$_POST['riyu'],':absence2'=>date('Y年m月d日'),':userid'=>$_SESSION['username']);
    $res = $stmt->execute($params);
    $pdo = null;
}
?>
<?php
  date_default_timezone_set('Asia/Tokyo');
if (isset($_POST['hankyu'])) {
    $pdo = new PDO('mysql: host=localhost; dbname=kintaikanri; charset=utf8','root', '');
    $stmt = $pdo->prepare('UPDATE kintai SET half_holiday = :hh WHERE userid = :userid');
    $params = array(':hh' =>date('Y-m-d H:i:s'),':userid' =>$_SESSION['username']);
    $res = $stmt->execute($params);
    $pdo = null;
}
?>


        <header>
　　　　<h2>WEB勤怠管理システム</h2>
        </header>
        <h3 calss="err"><?php echo $errorMessage ?><h3>
        <h3 calss="err"><?php echo $tureMessage ?><h3> 
        <p id="hizuke" class= "hizuke"></p>
        <script type = "text/javascript" src="hizuke1.js"></script>
        <div>
        <p id="RealtimeClock" class = "realclock1"></p>
        <script type="text/javascript" src="zikoku1.js"></script>
       </div>

      
        <form name="form2"  method="POST">

    
            <div class="r2">
           <h4>ユーザーID</h4>
            </div>   
        <input type ="text" name="userid" id="userid" placeholder="IDを入力" style="font-size: 20px;" class="text1" maxlength="4"/>
        <div class="r3">
         
      
        <div class="list1">
         <ul class="buttonlist">
         <li><input type="submit" id="login" name="login1" class="b1 b-o1 b-c1 b-ca1 b-s1" value="出勤" style="font-size:24px;"/></li>
         <li><input type="submit" id="login" name="login2" class="b2 b-o2 b-c2 b-ca2 b-s2" value="退勤"style="font-size:24px;" /></li>
         <li><input type="submit" id="login" name="login3" class="b3 b-o3 b-c3 b-ca3 b-s3" value="欠勤"style="font-size:24px;" /></li>
         <li><input type="submit" id="login" name="login4" class="b4 b-o4 b-c4 b-ca4 b-s4" value="半休"style="font-size:24px;"/></li>
     </ul>
   </div>
 </form>

 
        
</body>

</html>
