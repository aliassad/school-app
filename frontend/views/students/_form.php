<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Students */
/* @var $form yii\widgets\ActiveForm */

$classes = \app\models\Classes::find()->all();
$classesList =\yii\helpers\ArrayHelper::map($classes,'id','name');
$sessions = \app\models\Session::find()->all();
$sessionsList =\yii\helpers\ArrayHelper::map($sessions,'id','name');
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rollno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class_id')->dropDownList($classesList, ['prompt' => 'Select Class..']) ?>

    <?= $form->field($model, 'class_medium')->dropDownList([ 'English' => 'English', 'Urdu' => 'Urdu', ], ['prompt' => 'Select Class Medium..']) ?>

    <?= $form->field($model, 'session_id')->dropDownList($sessionsList, ['prompt' => 'Select Session..']) ?>
    
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
