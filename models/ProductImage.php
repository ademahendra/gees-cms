<?php

namespace gees\cms\models;

use Yii;

/**
 * This is the model class for table "product_image".
 *
 * @property integer $id
 * @property string $url
 * @property string $url_thumb
 * @property string $image_size
 * @property integer $product_id
 * @property string $created_at
 * @property string $update_at
 * @property integer $created_by
 * @property integer $update_by
 * @property integer $status
 */
class ProductImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'url_thumb', 'product_id', 'created_at', 'update_at', 'created_by', 'update_by'], 'required'],
            [['product_id', 'created_by', 'update_by', 'status'], 'integer'],
            [['created_at', 'update_at'], 'safe'],
            [['url', 'url_thumb'], 'string', 'max' => 255],
            [['image_size'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'url' => Yii::t('app', 'Url'),
            'url_thumb' => Yii::t('app', 'Url Thumb'),
            'image_size' => Yii::t('app', 'Image Size'),
            'product_id' => Yii::t('app', 'Product ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'update_at' => Yii::t('app', 'Update At'),
            'created_by' => Yii::t('app', 'Created By'),
            'update_by' => Yii::t('app', 'Update By'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
