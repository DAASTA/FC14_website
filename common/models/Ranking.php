<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ranking".
 *
 * @property integer $id
 * @property integer $post_id
 * @property integer $score
 */
class Ranking extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ranking';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'score'], 'required'],
            [['post_id', 'score'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'score' => 'Score',
        ];
    }

    // return ActiveQuery
    public function getPost() {
        return $this->hasOne(Post::className(), ['id'=>'post_id']);
    }
}
