<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "card".
 *
 * @property int $id
 * @property string|null $card_id
 * @property string|null $card_alias
 * @property string|null $card_account_id
 * @property string|null $type_of_card
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Card extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'card';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['card_id'], 'string', 'max' => 16],
            [['card_alias'], 'string', 'max' => 30],
            [['card_account_id'], 'string', 'max' => 32],
            [['type_of_card'], 'string', 'max' => 255],
            [['card_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'card_id' => 'Card ID',
            'card_alias' => 'Card Alias',
            'card_account_id' => 'Card Account ID',
            'type_of_card' => 'Type Of Card',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    // Associate an account to a card

    public function getAccount()
    {
        return $this->hasOne(Account::className(),['account_id' => 'card_account_id']);
    }
}
