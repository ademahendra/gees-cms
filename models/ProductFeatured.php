<?php

namespace gees\cms\models;

use Yii;

/**
 * This is the model class for table "product_featured".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $start_date
 * @property string $end_date
 * @property string $created_at
 * @property string $update_at
 * @property integer $created_by
 * @property integer $update_by
 * @property integer $status
 */
class ProductFeatured extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_featured';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'created_by', 'update_by', 'status'], 'integer'],
            [['start_date', 'end_date', 'created_at', 'update_at'], 'safe'],
            [['created_at', 'update_at', 'created_by', 'update_by'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'created_at' => Yii::t('app', 'Created At'),
            'update_at' => Yii::t('app', 'Update At'),
            'created_by' => Yii::t('app', 'Created By'),
            'update_by' => Yii::t('app', 'Update By'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
