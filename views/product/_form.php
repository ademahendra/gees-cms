<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = Yii::t('app', 'Products');
/* @var $this yii\web\View */
/* @var $model app\modules\webadmin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card bg-white">
    <div class="col-md-12">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-notebook font-red"></i>
                    <span class="caption-subject font-red sbold uppercase"><?= $this->title ?> </span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided">
                        <?= Html::a("<i class='icon-layers'></i> List ".Html::encode($this->title) , ['index'], ['class' => 'btn green-turquoise btn-sm']) ?>                     </div>
                </div>
            </div>
            <div class="portlet-body product-form">

    <?php $form = ActiveForm::begin(); ?>
<?= $form->errorSummary($model) ?>    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'available_stock')->textInput() ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'update_by')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Save') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
			</div>
        </div>
    </div>
</div>
