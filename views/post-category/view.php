<?php

use yii\widgets\DetailView;
use yii\helpers\Html;
$this->title = Yii::t('app', 'Post Categories');
/* @var $this yii\web\View */
/* @var $model app\modules\webadmin\models\PostCategory */
?>
<div class="card bg-white post-category-view">
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-cup font-red"></i>
                    <span class="caption-subject font-red sbold uppercase"><?= Html::encode($this->title) ?></span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided">
                        <?= Html::a('<i class="icon-list"></i> List '.Html::encode($this->title), ['index'], ['class' => 'btn green-jungle btn-sm']) ?>
                        <?= Html::a('<i class="icon-plus"></i> New '.Html::encode($this->title), ['create'], ['class' => 'btn green-turquoise btn-sm']) ?>
                        <?= Html::a('<i class="icon-pencil"></i> Edit', ['update', 'id' => $model->id], ['class' => 'btn yellow-gold btn-sm']) ?>
                        <?= Html::a('<i class="icon-trash"></i> Delete', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-sm red',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>                    </div>
                </div>
            </div>
            <div class="portlet-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'parent',
            'order',
            'slug',
            'title',
            'created_at',
            'update_at',
            'created_by',
            'update_by',
            'status',
        ],
    ]) ?>
            </div>
        </div>
    </div>
</div>
