<?php

class NewsController extends Controller
{
	public function actionIndex($id)
	{
	    $models = News::model()->findAll();//todo add select where
        $category = Category::model()->findByPk($id);
		$this->render('index', array('models'=>$models, 'category'=>$category));
	}

    public function actionView($id)
    {
        $model = News::model()->findByPk($id);
        $this->render('view', array('model'=>$model));
    }
}