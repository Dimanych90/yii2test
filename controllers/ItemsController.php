<?php


namespace app\controllers;

use app\models\Items;
use http\Client\Request;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\helpers\Url;
use yii\web\Session;

class ItemsController extends Controller
{
    public function actionList()
    {
        $items = Items::find()->all();

        return $this->render('list', ['items' => $items]);
    }

    public function actionEdit($id)
    {
        $item = Items::findAll($id);

        return $this->render('edit', ['item' => $item[0]]);
    }

    public function actionAdd()
    {
        return $this->render('add');
    }

    public function actionAdded(\yii\web\Request $request)
    {
        $title = $request->post('title');
        $description = $request->post('description');
        Yii::$app->db->createCommand()->insert('items', ['title' => $title,
            'description' => $description])->execute();
        return $this->redirect('list');
    }

//    public function beforeAction($action)
//    {
//        $this->enableCsrfValidation = false;
//        return parent::beforeAction($action);
//    }

    public function actionSave(\yii\web\Request $request)
    {
        $id = $request->post('id');
        $title = $request->post('title');
        $description = $request->post('description');
        Yii::$app->db->createCommand()->update('items', ['title' => $title,
            'description' => $description], "id = $id")
            ->execute();
        return $this->redirect('list');
    }

    public function actionDelete($id)
    {

        Yii::$app->db->createCommand()->delete('items',"id = $id")->execute();

        return $this->redirect('list');
    }

}