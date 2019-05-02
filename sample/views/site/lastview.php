<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

\yii\web\YiiAsset::register($this);
?>
<html>

<title></title>
<head>
<style>


 input[type=button], input[type=submit], input[type=reset] {
  background-color: #ff9966;
  border: none;
  color: white;
  padding: 10px;
  text-decoration: none;
  margin: 2px 2px;
  cursor: pointer;
  border-radius: 50%;
}
.div1 {
  text-decoration-line: ;
  text-decoration-style: ;
  text-indent: 30px;
  background-color: #ffd480;
  font-size: 40px;
  width: 100%;
  margin: 0;
  position: relative;
  left: 0;
}

.div2 {
  float: left;
  width: 100%;
  position: relative;
  
}

#emp {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  table-layout: auto;
  width: 100%;  
}

#emp td, #emp th {
  border: 1px solid #ddd;
  padding: 8px;
}

#emp tr:nth-child(even){background-color: #f2f2f2;}

#emp tr:hover {background-color: #ffffcc;}

#emp th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ff9900;
  color: white;
  font-size: 20px;
}
</style>
</head>
<body>

<div class="div1">
    <p>Employee Information</p>
</div>
<div class="div2">
<form action="">

<table id="emp">
  <tr>
    <th>Emp_id</th>
    <th>Name</th>
    <th>Familly</th>
    <th>Address</th>
    <th>Email</th>
    <th>Unit_id</th>
    <th> </th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>
    	<label for="fname"></label>
  		 <input type="text" id="fname" name="fname">
  	</td>
    <td><label for="lname"></label>
  		 <input type="text" id="lname" name="lname">
  	</td>
    <td><label for="addr"></label>
  		 <input type="text" id="addr" name="addr">
  	</td>
    <td><label for="email"></label>
  		 <input type="text" id="email" name="email">
  	</td>
    <td><select id="unit" name="unit_name">
        <option value="edari">edari</option>
        <option value="it">it</option>
        <option value="mali">mali</option>
        </select>
    </td>
    <td>...</td>
    
  </tr>
  <tr>
    <td>Berglunds snabbköp</td>
    <td>Christina Berglund</td>
    <td>Sweden</td>
    <td>Sweden</td>
    <td>Sweden</td>
    <td>..</td>
    <td>
    	<input type="button" value="B">
		<input type="reset" value="R ">
		<input type="submit" value="E">
    </td>
  </tr>
  </table>
</form>

</div>
</body>
</html> 
