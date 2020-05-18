<?= $this->Form->create() ?>

<?php
echo $this->Form->control('username');
echo $this->Form->control('password');
?>

<?= $this->Form->button(__('Acessar')) ?>
<?= $this->Form->end() ?>
</div>