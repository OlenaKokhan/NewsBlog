<?php
/* @var $this NewsController */

$this->breadcrumbs=array(
    $model->title,
);

if (!$model){
    echo "Not Found";
}

echo "<h1>".$model->title."</h1>";
echo "<h4>".$model->text."</h4>";
/*
foreach ($model->сategories as $category){
    echo "<p>".$category->title."</p>";
}
*/
echo "<h2>Leave comment</h2>";
echo CHtml::form();
echo CHtml::textArea('comment');
echo "<br/>";
echo CHtml::submitButton('Comment');
echo CHtml::endForm();

echo "<br/><h2>Comments</h2>";
$comments = Comment::model()->findAllByAttributes(array('news_id'=>$model->id));
foreach ($comments as $comment){
    echo "<span>".$comment->user->username.": ".$comment->text."</span><br/>";
}
?>