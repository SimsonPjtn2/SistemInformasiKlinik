<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pegawai'); ?>
		<?php echo $form->textField($model,'id_pegawai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_pegawai'); ?>
		<?php echo $form->textField($model,'nama_pegawai',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_telp'); ?>
		<?php echo $form->textField($model,'no_telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->