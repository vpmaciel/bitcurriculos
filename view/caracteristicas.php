<?php
defined('BASEPATH') || exit('No direct script access allowed');

$resposta_array = Resposta::ObterValorArray();

?>
<!DOCTYPE html>
<html>
<head>
    <?php
    $this->load->view(Constante::CABECALHO_VIEW);
    ?> 
</head>
<body>
	<div class="row">
        <?php $this->load->view(Constante::MENU_VIEW); ?>
    
		<div class="col-lg-12">
			<h1>Curso</h1>
            <?= form_open('CursoController/GravarRegistro') ?>
            <?php

            $template = array(
                'table_open' => '<table align="center" border="0" cellpadding="2" cellspacing="1">'
            );

            $this->table->set_template($template);

            $this->table->add_row(form_label('NÍVEL', Constante::NIVEL));
            $this->table->add_row(form_error(Constante::NIVEL, '<div class="error">', '</div>'));

            if (! isset($nivel)) {
                $nivel = '';
            }

            $entrada = array(
                Constante::NAME => Constante::NIVEL,
                Constante::ID => Constante::NIVEL,
                Constante::CLASSE => Constante::CLASSE_ENTRADA_VALUE,
                Constante::REQUIRED => 'true',
                Constante::STYLE => Constante::STYLE_WIDTH
            );

            $nivel = ($this->input->post(Constante::NIVEL)) ? $this->input->post(Constante::NIVEL) : $nivel;

            $this->table->add_row(form_dropdown($entrada, $resposta_array, $nivel));

            $entrada = array(
                Constante::TYPE => Constante::SUBMIT,
                Constante::VALUE => 'Salvar',
                Constante::CLASSE => Constante::CLASSE_BTN_VALUE
            );

            $this->table->add_row(form_label('', ''));
            $this->table->add_row(form_input($entrada));

            echo $this->table->generate();

            if (! isset($id)) {
                $id = '';
            }

            $entrada = array(
                Constante::TYPE => Constante::HIDDEN,
                Constante::NAME => Constante::ID,
                Constante::ID => Constante::ID,
                Constante::VALUE => set_value(Constante::ID, $id)
            );

            echo form_input($entrada);
            ?>
            <?= form_close(); ?>
		</div>
		
	</div>
</body>
</html>
