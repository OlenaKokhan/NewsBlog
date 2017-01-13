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