function showClock1(){
    var nowTime = new Date();
    var HH = nowTime.getHours(); 
    var mm = nowTime.getMinutes();
    var ss  = nowTime.getSeconds(); 
    HH = ('0'+HH).slice(-2);
    mm = ('0'+mm).slice(-2);
    ss = ('0'+ss).slice(-2);
    var msg =  HH + ":" + mm + "." + ss ;
    document.getElementById("RealtimeClock").innerHTML = msg; 
    }
    setInterval('showClock1()',1000);

