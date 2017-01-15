<h2>Leave comment</h2>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'comment-form',
        'enableAjaxValidation'=>false,
    )); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'text'); ?>
        <?php echo $form->textArea($model,'text',array('maxlength'=>255)); ?>
        <?php echo $form->error($model,'text'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Comment', array("class"=>"submit")); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
<?php
?>
<script>
    $(document).on("click", ".submit", function(){
        $.ajax({
            "url":"updateComments",
            "type":"post",
            "success":function (data) {
                $data = data;
            }
        });
        return $data;
    });
</script>
