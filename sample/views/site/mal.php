<?php
namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
//use Codeception\Test\Unit;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Employee;
use app\models\Unit;
use yii\web\NotFoundHttpException;
use yii\helpers\Html;
use yii\widgets\ActiveForm;



$this->registerJsFile(Yii::getAlias('@web') . "/web/js/jquery.min.js" , ['position' => \yii\web\View::POS_HEAD], "jquery");

?>
<html>

<head>
<title>Multiplication Table Generator</title>
<style>
body{
  background-color:#FDE3A7;
  font-family: Verdana;
  

}

tr{
 height:30px;
 text-align:center;
 border: 1px solid black;
 }

 .td1{
   
    border: 1px solid black;
    width:30px;
    background-color:#ccc;
 }
 
 .td2{
    border: 1px solid black;
     width:30px;
     background-color:#fff;
 }
 
 .td3{
   
    border: 1px solid black;
    width:70px;
    background-color:#ccc;
 }
 
</style>
<body>
 <table id="myTable">
  
</table>
<table id="randomTable">
  
</table>
<script >
$(document).ready(function(){

	for(var i = 1; i < 11; i++) {
		  var markup = "<tr>";
	 		  
		for(var j = 1; j < 11; j++) {
			var clstd = "td2";
			
			if(j == 1 || i == 1) {
				clstd = "td1";
			}
			
			markup +="<td class=" +clstd +">" + i*j +"</td>"
			
		}

		markup +="</tr>"
		
		$("#myTable").append(markup);
	}	
	  

	
	var list = [];
	for(var i = 1; i < 11; i++){
	 

	 // alert(obj.num1);
	     for(var j = 1; j < 11; j++) {

	    	 list.push({"num1":  i , "num2":  j, "res": i*j });
			 
	     }
	  }
	  
	
		var markup1; 
		var list1=shuffleArr(list);
	
		
		$.each(list1, function(index, obj){
			if (index==20) {
			    return false;
			  }
			markup1 +="<tr><td class= td3 >" + obj.num2+ " *" +obj.num1+ "</td><td class=" +clstd +">" + obj.res + "</td></tr>";
			//alert(this.num1);
			//alert(this.num2);
			//alert(this.res);
			//alert(this.num1 + "* " + this.num2 +"=" + this.res +" ");
		  // return this.num1 + "* " + this.num2 +"=" + this.res +" ";
		});
		
			$("#randomTable").append(markup1);
		
	
	
	//random
	 function shuffleArr(arr)
	       {
	          for(var j, x, i = arr.length; i; j = parseInt(Math.random() * i), x = arr[--i], arr[i] = arr[j], arr[j] = x);
	          return arr;
	       }
	
	
});  	   

//var color_td;
//document.write("<table border='1px'>");

//for(var i = 1; i < 11; i++) {

//	document.write("<tr style='height:30px;text-align:center;'>");

//	for(var j = 1; j < 11; j++) {

//		if(j == 1 || i == 1) {
//			color_td = "#ccc";
//		}
//		else {
//			color_td = "#fff";
//		}

//		document.write("<td style='width:30px;background-color:" + color_td + "'>" + i*j + "</td>");
		
//	}
//	document.write("</tr>");
//}

//document.write("</table>");

//shuffleAds: 
	

</script>
</head>
</body>
</html>

