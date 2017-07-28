<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property int $id
 * @property string $text
 * @property int $userId
 * @property int $receiver
 * @property string $dateSent
 * @property int $status
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'userId', 'receiver', 'status'], 'required'],
            [['text'], 'string'],
            [['userId', 'receiver', 'status'], 'integer'],
            [['dateSent'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'userId' => 'User ID',
            'receiver' => 'Receiver',
            'dateSent' => 'Date Sent',
            'status' => 'Status',
        ];
    }
}
