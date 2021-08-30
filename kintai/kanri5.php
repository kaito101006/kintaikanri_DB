<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location:kanri1.php");
} 
?>
<!DOCTYPE html>
<html lang =ja>
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=dvice-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=dege">
        <title>勤怠管理システム</title>
        <link rel="stylesheet" href="kanri5.css">
    </head>
    <body>
        
        <header>
　　　　<h2>WEB勤怠管理システム</h2>
        </header>
        <p id="hizuke" class= "hizuke"></p>
        <script type = "text/javascript" src="hizuke1.js"></script>

        <p id="RealtimeClock" class = "realclock1"></p>
        <script type="text/javascript" src="zikoku1.js"></script>
        <h3 class="user1">ようこそ「<?php echo $_SESSION["username"]; ?>」さん</h3>
        <form action='kanri1.php' method='POST'>    
     <ul class="buttonlist">
         <li><input type="submit"class="btn btn-border1 btn-s1" onClick="clickEvent()" name="hankyu" value="はい"></li>
         <li><input type="submit"class="btn btn-border2 btn-s2"href="kanri1.php" value="いいえ"></li>
 
     </ul>
   </div>
 </form>

 <script>
    function clickEvent(){
        alert('登録いたしました');
        location.href ='kanri1.php';
    }
</script>
 
        
</body>

</html>
