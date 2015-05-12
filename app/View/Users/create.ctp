<div>
<?php echo $this->Form->create('User', array('type' => 'file')); ?>
    <?php echo $this->Form->input('image', array('type' => 'file')); ?>
    <?php echo $this->Form->input('image_dir', array('type' => 'hidden')); ?>
<?php echo $this->Form->end('Save'); ?>
</div>
<div>
<?php
//if is set imageName show uploaded picture

/*if(isset($imageName)) {
echo $this->Html->image('/upload/'.$imageName, array('alt' => 'uploaded image'));
}*/?>
</div>
