
var today=new Date(); 

var year = today.getFullYear();
var month = today.getMonth()+1;
var week = today.getDay();
var day = today.getDate();

var week_ja= new Array("日","月","火","水","木","金","土");


var msg = year+"年"+month+"月"+day+"日"+"("+ week_ja[week] +")";
document.getElementById("hizuke").innerHTML = msg;

