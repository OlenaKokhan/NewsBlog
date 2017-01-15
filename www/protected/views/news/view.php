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

?>

<br/><h3>Categories</h3>

<?php
$categories = Category::findAllByNewsId($model->id);
foreach ($categories as $category){
    echo "<span>".$category->title."</span></br>";
}
?>
<br/>
<?php
    if (!Yii::app()->user->isGuest)
        echo $this->renderPartial('newComment', array('model'=>$newComment));
?>

<br/><h2>Comments</h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>Comment::allByNewsId($model->id),
    'itemView'=>'_viewComment',
)); ?>
