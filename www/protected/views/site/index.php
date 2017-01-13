<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php
$models = News::all();

if (!$models){
    echo "Empty list";
}

shuffle($models);
foreach ($models as $model){
    //todo return text of news
    echo "<h5>".$model."</h5>";
}
?>
