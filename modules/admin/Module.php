<?php

namespace app\modules\admin;

use Yii;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if(!Yii::$app->user->isGuest and Yii::$app->user->identity->is_admin==1){
                 Yii::$app->viewPath = '@app/modules/admin/views';
                Yii::$app->errorHandler->errorAction = 'admin/default/error';
            
        }
   
    }
}
