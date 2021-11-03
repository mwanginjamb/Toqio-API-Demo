<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "account".
 *
 * @property int $id
 * @property string|null $account_id
 * @property string|null $Iban
 * @property string|null $bicSwift
 * @property string|null $client_id
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'account';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['account_id'], 'string', 'max' => 16],
            [['Iban'], 'string', 'max' => 64],
            [['bicSwift'], 'string', 'max' => 32],
            [['client_id'], 'string', 'max' => 255],
            [['account_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'account_id' => 'Account ID',
            'Iban' => 'Iban',
            'bicSwift' => 'Bic Swift',
            'client_id' => 'Client ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
