<?php

namespace gees\cms\models;

use Yii;

/**
 * This is the model class for table "post_category".
 *
 * @property integer $id
 * @property integer $parent
 * @property integer $order
 * @property string $slug
 * @property string $title
 * @property string $created_at
 * @property string $update_at
 * @property integer $created_by
 * @property integer $update_by
 * @property integer $status
 */
class PostCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent', 'order', 'created_by', 'update_by', 'status'], 'integer'],
            [['slug', 'title', 'created_at', 'update_at', 'created_by', 'update_by'], 'required'],
            [['created_at', 'update_at'], 'safe'],
            [['slug', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent' => Yii::t('app', 'Parent'),
            'order' => Yii::t('app', 'Order'),
            'slug' => Yii::t('app', 'Slug'),
            'title' => Yii::t('app', 'Title'),
            'created_at' => Yii::t('app', 'Created At'),
            'update_at' => Yii::t('app', 'Update At'),
            'created_by' => Yii::t('app', 'Created By'),
            'update_by' => Yii::t('app', 'Update By'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
