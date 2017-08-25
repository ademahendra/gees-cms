<?php

namespace gees\cms;

/**
 * webadmin module definition class
 */
class Webadmin extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'gees\cms\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
		\Yii::$app->view->theme = new \yii\base\Theme([
			'basePath' => '@app/web/metronic',
			'baseUrl' => '@web/web/metronic',
			'pathMap' => [
				'@app/views' => '@app/web/metronic',
				'@dektrium/user/views/security' => '@app/web/metronic/views',
			],
		]);
    }
}
