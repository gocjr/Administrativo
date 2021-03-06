<?= $this->Form->create('post', array('class' => 'form-signin')) ?>
<?php $this->Html->imagem('icon.png', array(
    'class' => 'mb-4',
    'alt' => 'texto de login',
    'width' => '72',
    'height' => '72'
))  ?>
<h1 class="h3 mb-3 font-weight-normal">Área Restrita</h1>
<div class="form-group">
    <label>Usuário</label>
    <?= $this->form->control('username', [
        ' class' => 'form-control',
        'placeholder' => 'endereço de email cadastrado',
        'label' => false
    ]); ?>
</div>
<div class="form-group">
    <label>Senha</label>
    <?= $this->form->control('password', [
        ' class' => 'form-control',
        'placeholder' => 'Digite a senha',
        'label' => false
    ]); ?>
</div>


<?= $this->Form->button(__('Acessar'), ['class' => 'btn btn-lg btn-danger btn-block']) ?>
<?= $this->Form->end() ?>