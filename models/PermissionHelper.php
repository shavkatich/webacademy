<?php

namespace app\models;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\PermissionHelper;

class PermissionHelper {

    public static function requireAdmin() {
        if (!\Yii::$app->user->isGuest) {
                if(Yii::$app->user->identity->is_admin == 1)
                    return true;
                else
                    return false;
        } else {
            return false;
        }
    }

    public static function requireUser() {
        if (!\Yii::$app->user->isGuest) {
                if(Yii::$app->user->identity->is_admin == 0)
                    return true;
                else
                    return false;
        } else {
            return false;
        }
    }

    public static function CheckStatus() {
        if (!\Yii::$app->user->isGuest) {
            if (Yii::$app->user->identity->status == "active") {
                return true;
            }
        } else {
            return false;
        }
    }
    

}

?>