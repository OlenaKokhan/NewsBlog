<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view">

    <?php echo "<h2>".CHtml::encode($data->title)."</h2>" ?>
    <p>
        <?php
            echo CHtml::encode(substr($data->text, 0, 400))."...";
            echo CHtml::link("Read...</p>", array('view', 'id'=>$data->id));
        ?>
    </p>

</div>
