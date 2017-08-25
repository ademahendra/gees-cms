<?php

namespace gees\cms\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $slug
 * @property integer $category_id
 * @property string $title
 * @property string $content
 * @property string $post_type
 * @property string $meta_title
 * @property string $meta_keyword
 * @property string $meta_description
 * @property string $created_at
 * @property string $update_at
 * @property integer $created_by
 * @property integer $update_by
 * @property integer $status
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slug', 'title', 'content', 'post_type', 'created_at', 'update_at', 'created_by', 'update_by'], 'required'],
            [['category_id', 'created_by', 'update_by', 'status'], 'integer'],
            [['content', 'post_type'], 'string'],
            [['created_at', 'update_at'], 'safe'],
            [['slug', 'title', 'meta_title', 'meta_keyword', 'meta_description'], 'string', 'max' => 255],
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
            'title' => Yii::t('app', 'Title'),
            'content' => Yii::t('app', 'Content'),
            'post_type' => Yii::t('app', 'Post Type'),
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
