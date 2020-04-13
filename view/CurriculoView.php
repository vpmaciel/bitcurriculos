<?php
defined('BASEPATH') || exit('No direct script access allowed');
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
			<h1>CeBusca</h1>
			<div align="center">
			<p align="justify">O CeBusca é um sistema para Internet em Recursos
				Humanos, com foco em recrutamento on-line. Atualmente administramos
				a mais bem organizada base de currículos do país, oferecendo às
				empresas o mais completo sistema de recrutamento on-line.
				Perseverança, dinamismo e vontade de inovar são características de
				nossa equipe, numa empresa sólida, com grandes desafios pela frente
				e foco em metas e resultados.</p>
			<p align="justify">Faça parte de nosso time, contribuindo com seu
				talento profissional. Cadastre seu currículo para estar disponível
				para diversas empresas. Um bom curriculum, bem apresentável e
				redigido, pode não garantir um emprego mas é, sem sombra de dúvidas,
				um passo importantíssimo para alcançá-lo. Cadastre sua empresa para
				buscar profissionais. Os profissionais de recursos humanos não podem
				deixar de compreender a complexidade psicossocial das pessoas, ainda
				que o seu papel principal continue a ser o de criar valor e gerar
				resultados.</p>
                <?= anchor('LoginEmpresaController/VerRegistro', 'Cadastrar vagas de emprego'); ?> |  
                <?= anchor('LoginPessoaController/VerRegistro', 'Cadastrar currículo'); ?>    
    		</div>
		</div>		
	</div>
</body>
</html>