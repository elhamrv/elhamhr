<?php

/* @var $this yii\web\View */

use app\module\Test;
use yii\helpers\Html;

$this->title = 'Shop';
$this->params['breadcrumbs'][] = $this->title;

$t=new Test(5);
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
  

<?php echo $t->test('hello world')?>
    <p>
        This is the shop page.
    </p>

    <code><?= __FILE__ ?></code>
</div>
