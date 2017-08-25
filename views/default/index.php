<?php

/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = 'Gees CMS';
?>
    <div class="card bg-white fnb-category-index">
        <div class="col-md-12">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-cup font-red"></i>
                        <span class="caption-subject font-red sbold uppercase"><?= Html::encode($this->title) ?></span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN ROW -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN CHART PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bar-chart font-green-haze"></i>
                                        <span class="caption-subject bold uppercase font-green-haze"> Perfomance Report</span>
                                        <span class="caption-helper">daily perfomance report</span>
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="fullscreen"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="chart_2" class="chart" style="height: 400px;"> </div>
                                </div>
                            </div>
                            <!-- END CHART PORTLET-->
                        </div>
                    </div>
                    <!-- END ROW -->
                </div>
            </div>
        </div>
    </div>
<?php
$this->registerJsFile(Yii::$app->params['baseURL'].'/web/metronic/assets/global/plugins/amcharts/amcharts/amcharts.js');
$this->registerJsFile(Yii::$app->params['baseURL'].'/web/metronic/assets/global/plugins/amcharts/amcharts/serial.js');
$this->registerJsFile(Yii::$app->params['baseURL'].'/web/metronic/assets/global/plugins/amcharts/amcharts/themes/light.js');
$this->registerJsFile(Yii::$app->params['baseURL'].'/web/metronic/assets/pages/scripts/charts-amcharts.min.js');
