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


$this->registerJsFile(Yii::getAlias('@web') . "/web/js/jquery.min.js" , ['position' => \yii\web\View::POS_HEAD], "jquery");

?>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $.post("<?php echo Yii::getAlias('@web');?>/site/readpost",
    {
      A: "baran",
      b: "eli"
    },
    function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
</script>
</head>

<body>

<button>Send </button>

</body>
