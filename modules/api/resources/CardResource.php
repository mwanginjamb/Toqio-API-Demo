<?php
/**
 * Created by PhpStorm.
 * User: HP ELITEBOOK 840 G5
 * Date: 11/3/2021
 * Time: 1:47 PM
 */

namespace app\modules\api\resources;


use app\models\Card;

class CardResource extends Card
{
    public function extraFields()
    {
        return ['account'];
    }
}