<?php

namespace app\modules\user;

use yii\console\Application as ConsoleApplication;
use Yii;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\user\controllers';

    /**
     * @var int
     */
    public $passwordResetTokenExpire = 3600;

    public function init()
    {
        parent::init();
        if (Yii::$app instanceof ConsoleApplication) {
            $this->controllerNamespace = 'app\modules\user\commands';
        }
    }

    /**
     * @param $category
     * @param $message
     * @param array $params
     * @param null $language
     * @return string
     */
    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/user/' . $category, $message, $params, $language);
    }
}
