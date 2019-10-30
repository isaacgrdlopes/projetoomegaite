<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Cadastrar Contato</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>

            <?php if (form_error('nome')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('nome'); ?>
                </div>
            <?php endif; ?>
            <?php if (form_error('email')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('email'); ?>
                </div>
            <?php endif; ?>
            <?php if (form_error('telefone')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('telefone'); ?>
                </div>
            <?php endif; ?>

            <?php
            $attributes = array('action' => '/index.php/contatos/salvarNovo', 'class' => 'form-horizontal form-label-left', 'id' => 'demo-form2', 'method' => 'POST');
            echo form_open("contatos/novo", $attributes); ?>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input value="<?php echo set_value('nome'); ?>" type='text' name='nome' id="first-name" class="form-control col-md-7 col-xs-12 " data-parsley-id="5">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">E-mail: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input value="<?php echo set_value('email'); ?>" type='text' name='email' id="last-name" class="form-control col-md-7 col-xs-12 " data-parsley-id="7">
                </div>
            </div>
            <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telefone: <span class="required">*</span> </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input value="<?php echo set_value('telefone'); ?>" type='text' name='telefone' id="middle-name" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <a class='btn btn-danger' href="/index.php/contatos">Cancelar</a>
                    <button type='submit' class='btn btn-success'>Cadastrar</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>