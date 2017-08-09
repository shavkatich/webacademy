<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;

class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {
        $programming = \app\models\Programming::find()->all();
        $courses = \app\models\Courses::find()->all();
        $advantages = \app\models\Advantages::find()->all();
        $reviews = \app\models\Reviews::find()->all();
        $contacts = \app\models\Contacts::find()->all();
        return $this->render('index', [
                    'programming' => $programming,
                    'courses' => $courses,
                    'advantages' => $advantages,
                    'reviews' => $reviews,
                    'contacts' => $contacts,
        ]);
    }
    
        public function actionCourses() {
        $programming = \app\models\Programming::find()->all();
        $courses = \app\models\Courses::find()->all();
        $advantages = \app\models\Advantages::find()->all();
        $reviews = \app\models\Reviews::find()->all();
        $contacts = \app\models\Contacts::find()->all();
        return $this->render('courses', [
                    'programming' => $programming,
                    'courses' => $courses,
                    'advantages' => $advantages,
                    'reviews' => $reviews,
                    'contacts' => $contacts,
        ]);
    }
    
        public function actionPricing() {
        $programming = \app\models\Programming::find()->all();
        $courses = \app\models\Courses::find()->all();
        $advantages = \app\models\Advantages::find()->all();
        $reviews = \app\models\Reviews::find()->all();
        $contacts = \app\models\Contacts::find()->all();
        return $this->render('pricing', [
                    'programming' => $programming,
                    'courses' => $courses,
                    'advantages' => $advantages,
                    'reviews' => $reviews,
                    'contacts' => $contacts,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionSignup() {

        $model = new SignupForm();  // создаем новую запись в модели SignupForm()

        if (Yii::$app->request->isPost) { //Если данные пришли методом post
            $model->load(Yii::$app->request->post()); //Записываем в модель эти данные
            if ($model->signup()) { //Если данные записаны в модель
                return $this->redirect('/site/login'); //Редиректим на страницу авторизации
            }
        }
        return $this->render('signup', ['model' => $model]); //Рендерим вид signup и передаем данные $model
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
                    'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }

}
