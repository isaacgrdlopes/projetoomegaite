<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Atualiza Contatos</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST" action='<?php echo base_url() ?>index.php/contatos/salvarAlterar'>

                <input type='hidden' name='id' value='<?php echo $contato[0]->id; ?>' />
                <div class="form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome: <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type='text' name='nome' value=<?php echo $contato[0]->nome; ?> id="first-name" required="required" class="form-control col-md-7 col-xs-12 " data-parsley-id="5">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">E-mail: <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type='text' name='email' value=<?php echo $contato[0]->email; ?> id="last-name" required="required" class="form-control col-md-7 col-xs-12 " data-parsley-id="7">
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telefone:</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type='text' name='telefone' value=<?php echo $contato[0]->telefone; ?> data-parsley-id="9">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type='submit' class='btn btn-success'>Alterar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
