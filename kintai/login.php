

<!DOCTYPE html>
<html lang =ja>
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=dvice-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=dege">
        <title>勤怠管理システム(管理者用）</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>

    <?php  
 
session_start();


$errorMessage = "";


if (isset($_POST['login'])) {
  if (empty($_POST["userid"])) {
    $errorMessage = '※ユーザーIDが未入力です。';
    } else if (empty($_POST["password"])) {
    $errorMessage = '※パスワードが未入力です。';
    }

$userid = $_POST['userid'];
$password = $_POST['password'];
 

if (!empty($_POST['userid']) && !empty($_POST['password'])) {
try {
$pdo = new PDO('mysql: host=localhost; dbname=kintaikanri; charset=utf8','root', '');
$stmt = $pdo->prepare('SELECT count(*) FROM kintaim WHERE userid = ? AND pass = ?');
$stmt->execute(array($userid,$password)); 
$result = $stmt->fetch();
$stmt = null;
$db = null;
if($result[0] != 0) {
$_SESSION['userid'] = $userid;
header('Location: http://localhost/kintai/main.php');
exit;
} else {
$errorMessage = '※管理者IDあるいはパスワードに誤りがあります。';
}
 
} catch (PDOException $e) {
echo $e->getMessage();
exit;
}
}
}
  ?>

  
     
  


 


        <header class="he1">
            　　　　<h2>WEB勤怠管理システム(管理者用）</h2>
                
                    </header>
                  
    <div class="r1">
              <h1>ログイン</h1>   
    </div>  

   

   <form name="form2" action="login.php" method="post">
       <h3><?php echo $errorMessage ?><h3>
       <div class="rs1">
           <div class="rs2">
    <div class="r2">
        <h4>管理者ID</h4>
    </div>
     <input type="text" name="userid" id="userid" placeholder="IDを入力" value="" style="font-size:20px; margin-top:30px; margin-bottom:20px;"/>
    <div class="r3">
       <h4>パスワード</h4>
        </div>
     <input type="password" name="password"  id="password" placeholder="パスワードを入力" value="" style="font-size:20px; margin-top:30px;"/>
        </div>
        <div class="r4">
        <input type="submit" class="btn btn-border1 btn-s1" id="login" name="login" value="ログイン" />
     </div>
     </div>
    </form>

      
  
    </body>
    
        </html>