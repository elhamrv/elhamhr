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
<style>

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}

</style>

 <table id="myTable">
  <tr>
    <td> Name</td>
    <td> familly</td>
     <td>email</td>
    <td>unit_name</td>
     
  </tr>
  <tbody id="tbody">
     </tbody>
</table><br>
<div>

 <?php $form = ActiveForm::begin(['id' => "myForm"]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'familly')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_id')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    

    <?php ActiveForm::end(); ?>
    

      
       <input type="button" class="row" value="Click to Add Row"><br>
       <button id="sub">Save</button>

</div>


<p id="demo"></p>
<script>
$(document).ready(function(){
  $("button").click(function(){
	
    $.ajax({url:"http://localhost:7090/sample/site/ajaxview", dataType: "json", success: function(jArr){
    	myFunction(jArr);
    	//alert(jArr);
    	
    }});
  });
});



function myFunction(arr) {
  var out = "";
  var i;
  $.each(arr, function(index, data) {
	  out += '<tr><td>'+data.fn+'</td><td>'+data.ln+'</td><td>'+data.em+'</td><td>'+data.un+'</td></tr>';
	 });
	
 for(i = 0; i < arr.length; i++) {
      
	 //out +=  '<tr><td>' + arr[i].fn + '</td><td>' + arr[i].ln + '</td><td>' +  arr[i].em  + '</td><td>' + arr[i].un + '</td></tr>';
	
  }
 
 $("#myTable").append(out);
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

$("#sub").click( function() {
	 $.post( "<?php echo Yii::getAlias('@web');?>/site/readpost",
	         $("#myForm :input").serializeArray(),
	         function(data,status){
	      alert("Data: " + data + "\nStatus: " + status);
	    });
	clearInput();
	});
	 
	$("#myForm").submit( function() {
	  return false;
	});
	function clearInput() {
	    $("#myForm :input").each( function() {
	       $(this).val('');
	    });
	}
	
</script>

<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button>Get External Content</button>

</body>