<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\User;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\PermissionHelper;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'matchCallback' => function($rule, $action) {
                    return PermissionHelper::requireAdmin();
                }
                    ],
                    [
                        'actions' => [''],
                        'allow' => true,
                        'matchCallback' => function($rule, $action) {
                    return PermissionHelper::requireUser();
                }
                    ],
                    [
                        'actions' => [],
                        'allow' => false,
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $users = User::find()->all();
        $active_user = User::find()->where(['status'=> 'active'])->all();
        $inactive_user = User::find()->where(['status'=> 'inactive'])->all();
        $admin = User::find()->where(['is_Admin'=> 1])->all();
        return $this->render('index',[
            'users' => $users,
            'active_user' => $active_user,
            '$inactive_user' => $inactive_user,
            'admin' => $admin,
        ]);
    }
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
 
        ];
    }
}
