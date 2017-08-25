<?php
use yii\helpers\Url;
use yii\helpers\Html;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'name',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'parent',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'route',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'order',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'data',
    ],
	[
		'class' => '\kartik\grid\DataColumn',
		'format' => 'raw',
		'vAlign' => 'middle',
		'value' => function ($data) {
			$view = Html::a('<button class="btn btn-success btn-xs"><span class="fa fa-eye"></span></button> ', Url::to(['view', 'id' => $data->id]), [
				 'title' => Yii::t('yii', 'View'),
				 'data-pjax' => 0,
				 'role' => 'modal-remote',
				 'data-toggle' => 'tooltip'
				 ]);
				 $update = Html::a('<button class="btn btn-warning btn-xs"><span class="fa fa-edit"></span></button> ', Url::to(['update', 'id' => $data->id]), [
					 'title' => Yii::t('yii', 'Update'),
					 'data-pjax' => 0,
					 'role' => 'modal-remote',
					 'data-toggle' => 'tooltip'
					 ]);
				 $delete = Html::a('<button class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></button> ', Url::to(['delete', 'id' => $data->id]), [
					'title' => Yii::t('yii', 'Delete'),
					'data-pjax' => 0,
					'role' => 'modal-remote',
					'data-toggle' => 'tooltip',
					'data-request-method' => 'post',
					'data-confirm-title' => 'Are you sure?',
					'data-confirm-message' => 'Are you sure want to delete this item'
				  ]);
				return $view.$update.$delete;
			}
	],
/*    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],
*/
];   