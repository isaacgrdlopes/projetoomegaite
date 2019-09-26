<?php if ($contatos) : ?>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tabela de Cadastrados</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class='btn btn-warning' href='/index.php/contatos/novo'>Novo</a>
                                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                        <thead>
                                            <tr role="row">
                                                <th>Nome</th>
                                                <th>E-mail</th>
                                                <th>Telefone</th>
                                                <th colspan='2'>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($contatos as $linha) {
                                                    echo    "<tr>" .
                                                        "<td>" . $linha->nome . "</td>" .
                                                        "<td>" . $linha->email . "</td>" .
                                                        "<td>" . $linha->telefone . "</td>" .
                                                        "<td>" .
                                                        "<a class='btn btn-success'<a href='contatos/alterar/" . $linha->id . " '>Alterar</a>" .
                                                        "</td>" .
                                                        "<td>" .
                                                        "<a class='btn btn-danger'<a href='/index.php/contatos/excluirContato/" . $linha->id . " '>Excluir</a>" .
                                                        "</td>" .
                                                        "</tr>";
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Total de Registros: <?php echo $this->Contatos_Model->CountAll() ?></div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                                <ul class="pagination">
                                                    <?php echo $pagination; ?>
                                                <?php else : ?>
                                                    <p class="alert alert-info">Página inexistente</p>
                                                <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>