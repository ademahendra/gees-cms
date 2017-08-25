<?php

namespace gees\cms\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $slug
 * @property integer $category_id
 * @property string $name
 * @property string $description
 * @property double $price
 * @property integer $available_stock
 * @property string $meta_title
 * @property string $meta_keyword
 * @property string $meta_description
 * @property string $created_at
 * @property string $update_at
 * @property integer $created_by
 * @property integer $update_by
 * @property integer $status
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slug', 'name', 'description', 'created_at', 'update_at', 'created_by', 'update_by'], 'required'],
            [['category_id', 'available_stock', 'created_by', 'update_by', 'status'], 'integer'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['created_at', 'update_at'], 'safe'],
            [['slug', 'name', 'meta_title', 'meta_keyword', 'meta_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'slug' => Yii::t('app', 'Slug'),
            'category_id' => Yii::t('app', 'Category ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'price' => Yii::t('app', 'Price'),
            'available_stock' => Yii::t('app', 'Available Stock'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_keyword' => Yii::t('app', 'Meta Keyword'),
            'meta_description' => Yii::t('app', 'Meta Description'),
            'created_at' => Yii::t('app', 'Created At'),
            'update_at' => Yii::t('app', 'Update At'),
            'created_by' => Yii::t('app', 'Created By'),
            'update_by' => Yii::t('app', 'Update By'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
