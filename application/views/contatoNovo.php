<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Cadastrar Contato</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST" action='<?php echo base_url() ?>index.php/contatos/salvarNovo'>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome: <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type='text' name='nome' id="first-name" required="required" class="form-control col-md-7 col-xs-12 " data-parsley-id="5">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">E-mail: <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type='text' name='email' id="last-name" required="required" class="form-control col-md-7 col-xs-12 " data-parsley-id="7">
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telefone:</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type='text' name='telefone' data-parsley-id="9">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class='btn btn-danger' href="/index.php/contatos">Cancelar</a>
                        <button type='submit' class='btn btn-success'>Cadastrar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>