<?php

namespace app\controllers;

use Yii;
use app\models\Category;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class CategoryController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $categories = Category::find()->all();
        return $this->render('index', ['categories' => $categories]);
    }

    public function actionView($id)
    {
        $category = $this->findModel($id);
        return $this->render('view', ['category' => $category]);
    }

    public function actionCreate()
    {
        $category = new Category();

        if ($category->load(Yii::$app->request->post()) && $category->save()) {
            return $this->redirect(['view', 'id' => $category->id]);
        }

        return $this->render('create', ['category' => $category]);
    }

    public function actionUpdate($id)
    {
        $category = $this->findModel($id);

        if ($category->load(Yii::$app->request->post()) && $category->save()) {
            return $this->redirect(['view', 'id' => $category->id]);
        }

        return $this->render('update', ['category' => $category]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($category = Category::findOne($id)) !== null) {
            return $category;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
