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
        <link rel="stylesheet" href="kanri4.css">
    </head>
    <body>
        
        
        <header class="he1">  
　　　　<h2>WEB勤怠管理システム</h2>
        <a href="kanri1.php" class="out1"><p>戻る</p></a>
        </header>
        <p id="hizuke" class= "hizuke"></p>
        <script type = "text/javascript" src="hizuke1.js"></script>

        <p id="RealtimeClock" class = "realclock1"></p>
        <script type="text/javascript" src="zikoku1.js"></script>
        <h3 class="user1">ようこそ「<?php echo $_SESSION["username"]; ?>」さん</h3>
 <form name="form1" action="kanri1.php" method="POST">
  <div class="d1">
     
        <input type ="text" name="riyu" placeholder="欠勤理由を入力" style="font-size: 20px;" class="text1" />
 </div>
     <ul class="buttonlist">
         <li><input type="submit" name="absence1" class="btn btn-border1 btn-s1" onClick="clickEvent()"></li>
      
 
     </ul>
  
 </form>

 <script>
    function clickEvent(){
       if(document.form1.riyu.value == ""){
           alert('欠勤理由を入力してください');
       }else{
     alert('登録いたしました');
           location.href ='kanri1.php';}
    }
</script>
 
        
</body>

</html>