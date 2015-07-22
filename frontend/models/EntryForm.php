<?php
/**
 * Created by PhpStorm.
 * User: morro
 * Date: 22.07.2015
 * Time: 00:05
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
          [['name', 'email'], 'required'],
          ['email', 'email'],
        ];
    }
}