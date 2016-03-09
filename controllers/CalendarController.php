<?php
//namespace backend\controllers;
namespace app\controllers;

use Yii;
use app\models\Course;
use app\models\Test;
use yii\web\Controller;
use yii\filters\VerbFilter;


/**
 * Site controller
 */
class CalendarController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
		
	   $tasks = Course::find()->all();
		
	   $events = array();
	   foreach($tasks as $task)
	   {
		   //Testing
		   $Event = new \yii2fullcalendar\models\Event();
		   $Event->id = $task->CRM_Course_Code;
		   $Event->title = $task->CRM_Course_Title;
		   $Event->start = $task->CRM_Course_Enrollment_Deadline;
		   $events[] = $Event;
		}
   
        return $this->render('index', ['events' => $events]);
    }

}
