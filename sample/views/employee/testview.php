<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = $model->familly;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<style>

.clearfix::after {
  content: "";
  clear: both;
  display: table;

}

.box {
  float: left;
  text-align: center;
  border-style: solid;
  border-width: 1px;
  width: 25%;
  height: 40px;
  padding: 10px;
  background-color:lightblue;
}

.box1 {
  float: left;
  border-style: solid;
  text-align: center;
  border-width: 1px;
  width: 25%;
  height: 40px;
  padding: 10px;
  background-color:LightGray;
  color: red;
}

</style>

<div class="employee-view">

  <h1><?= Html::encode($model->familly . ', ' . $model->name) ?></h1>
   
  

</div>

 <div  class="clearfix">  
   <div class="box">Name</div> 
   <div class="box">familly</div>
   <div class="box">address</div>
   <div class="box">email</div>
   
  
 
<?php 

echo '<div class="box1">'. $model->name .'</div><div class="box1 ">' . $model->familly.'</div><div class="box1 ">' .$model->address.'</div><div class="box1 ">' .$model->email. '</div>';
 

 $this->title = $model->name;?>
 
<h1 style="color:Tomato;"><?= Html::encode($this->title) ?></h1>

</div>
<br>

 <div  class="clearfix">  
   <div class="box">Name</div> 
  <?php echo '<div class="box1 ">'. $model->name .'</div><br><br>'?>
   <div class="box">familly</div>
   <?php echo '<div class="box1 ">'. $model->familly .'</div><br><br>'?>
   <div class="box">address</div>
   <?php echo '<div class="box1 ">'. $model->address .'</div><br><br>'?>
   <div class="box">email</div>
   <?php echo '<div class="box1">'. $model->email .'</div><br><br>'?>
   <div class="box">emp_id</div> 
   <?php echo '<div class="box1 ">'. $model->emp_id .'</div><br><br>'?>

 
</div>