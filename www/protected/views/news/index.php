<?php
/* @var $this NewsController */

$this->breadcrumbs=array(
	$category->title,
);
?>
<?php
    if (!$models){
        echo "Empty list";
    }
    foreach ($models as $model){
        echo CHtml::link("<h4>".$model->title."</h4>", array('view', 'id'=>$model->id));
        echo "<p>".substr($model->text, 0, 150)."... ";
        echo CHtml::link("Read...</p>", array('view', 'id'=>$model->id));
        echo "</br></br>";
    }
?>
