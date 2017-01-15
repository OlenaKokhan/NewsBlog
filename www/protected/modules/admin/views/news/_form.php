<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
        <?php $this->widget('application.extensions.ckeditor.CKEditor', array(
            'model'=>$model,
            'attribute'=>'text',
            'editorTemplate'=>'full',
        )); ?>
		<?php echo $form->error($model,'text'); ?>
	</div>


    <div class="row">
        <?php //todo checkbox for category or smth else
            $newsToCategory = new NewsToCategory();
            $newsToCategory->news_id = $model->id;

            echo $form->labelEx($newsToCategory,'category_id');
            echo $form->checkBoxList($newsToCategory, 'category_id', Category::all())?>
        <?php echo $form->error($newsToCategory,'category_id'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->