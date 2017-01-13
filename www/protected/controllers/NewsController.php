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
        $newComment = new Comment();

        if(isset($_POST['Comment']))
        {
            $newComment->attributes=$_POST['Comment'];
            $newComment->news_id=$id;
            if($newComment->save())
                Yii::app()->user->setFlash('comment','Comment added.');
            $this->refresh();
        }
        $this->render('view', array('model'=>$model, 'newComment'=>$newComment));
    }
}