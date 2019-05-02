
<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->registerJsFile(Yii::getAlias('@web') . "/web/js/jquery.min.js" , ['position' => \yii\web\View::POS_HEAD], "jquery");


$this->title = 'Test';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
.clearfix::after {
  content: "";
  clear: both;
  display: table;

}
.box {
  float: left;
  border-style: solid;
  border-width: 1px;
  width: 25%;
  padding: 10px;
}


table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}

.button {
  background-color: #4cAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}

</style>
<div class="employee-test">
    <h1><?= Html::encode($this->title) ?></h1>
   <table id="myTable">
  <tr>
    <td> Name</td>
    <td> familly</td>
    <td>address</td>
    <td>email</td>
    <td>unit_name</td>
     
  </tr>
<?php 
foreach($mylist as $value) {
    echo '<tr><td>'. $value->name .'</td><td>' . $value->familly.'</td><td>' .$value->address.'</td><td>' .$value->email. '</td><td>' .$value->model_unit()->unit_name . '</td></tr>';
       
}

//print_r($unitList) ;
//print_r($mylist) ;

?>
 
</table>
<br/>
<div>
<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>


 <button onclick="test()">Click me</button>
 
<script >

function test(){
 /*var table = document.getElementById("myTable");
  var x = document.getElementById("myTable").rows.length;
  var row = table.insertRow(x);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  cell1.innerHTML = "NEW CELL1";
  cell2.innerHTML = "NEW CELL2";
  cell3.innerHTML = "NEW CELL3";
  cell4.innerHTML = "NEW CELL4";
  cell5.innerHTML = "NEW CELL5";*/


}

$(document).ready(function(){

	
	  $("input.row").click(function(){
			var name = $("#name").val();
		    var family = $("#family").val();
		    var address = $("#address").val();
		    var email = $("#email").val();
		    var unitname = $("#unitname").val();
		    var markup = "<tr><td>" + name + "</td><td>" + family + "</td><td>" + address + "</td><td>" + email + "</td><td>" + unitname + "</td></tr>";
		    $("#myTable tbody").append(markup);

		    //$("#myTable td").append("<input type='button' value='aaaa'>");

		});
});   
</script>
 
 <form>
         <input type="text" id="name" placeholder="Enter Name">
         <input type="text" id="family" placeholder="Enter family">
         <input type="text" id="address" placeholder="Enter address">
         <input type="text" id="email" placeholder="Enter email">
         <input type="text" id="unitname" placeholder="Enter unitname">
        
         <input type="button" class="row" value="Click to Add Row">
  </form>

</div>

<!--
 <div  class="clearfix">  
   <div class="box">Name</div> 
   <div class="box">familly</div>
   <div class="box">address</div>
   <div class="box">email</div>
   
<?php 
/*
foreach($mylist as $value) {
    echo '<div class="box">'. $value->name .'</div><div class="box">' . $value->familly.'</div><div class="box">' .$value->address.'</div><div class="box">' .$value->email. '</div>';
   
}
*/ 
//print_r($mylist) ;
?>

</div>
-->
    <p>
        This is the test page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>

