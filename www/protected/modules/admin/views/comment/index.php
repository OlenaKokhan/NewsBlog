<?php
/* @var $this CommentController */
/* @var $model Comment */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Comments</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'comment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id'=>array(
            'name'=>'id',
            'headerHtmlOptions'=>array('width'=>30),
        ),
		'text',
		'user_id'=>array(
            'name'=>'user_id',
            'value'=>'$data->user->username',
            'filter'=>User::all(),
        ),
        'news_id'=>array(
            'name'=>'news_id',
            'value'=>'$data->news->title',
            'filter'=>News::all(),
        ),
		array(
			'class'=>'CButtonColumn',
            'updateButtonOptions'=>array('style'=>'display:none'),
            'viewButtonOptions'=>array('style'=>'display:none'),
		),
	),
)); ?>
