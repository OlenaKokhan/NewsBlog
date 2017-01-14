<?php
/* @var $this NewsController */

$this->breadcrumbs=array(
	$category->title,
);
?>
<?php
    if (!News::allNews()){
        echo "Empty list";
    }
?>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>News::allNews(),
    'itemView'=>'_viewNews',
)); ?>

