<?php

namespace gees\cms\controllers;

use yii\web\Controller;

/**
 * Default controller for the `webadmin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
	public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['*'],
                'rules' => [
                    [
                        // 'actions' => ['index' ,'create','update','delete','bulk-delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
				
            ],
            'verbs' => [
                'class' => \yii\filters\VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    } 
	 
    public function actionIndex()
    {
        return $this->render('index');
    }
}
