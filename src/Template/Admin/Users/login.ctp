<?= $this->Form->create('post', ['class' => 'form-signin']) ?>
<?= $this->Html->imagem('cake-php.png', [
    'class' => 'mb-4',
    'alt' => 'texto de login',
    'width' => '72',
    'height' => '72'
]) ?>

<?php
echo $this->Form->control('username');
echo $this->Form->control('password');
?>

<?= $this->Form->button(__('Acessar')) ?>
<?= $this->Form->end() ?>
