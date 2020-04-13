<?php
defined('BASEPATH') || exit('No direct script access allowed');

$anuncio_array = Anuncio::ObterValorArray();
?>

<div class="anuncio">
	<div id="anuncio" align="center">
        <?php
        $arquivo = Anuncio::retornarArquivo();
        echo "<a href=\"" . $anuncio_array[$arquivo] . "\" target=\"_blank\">";
        ?>	
        <script type="text/javascript">
        document.write('<img src="<?= base_url("assets/img/banner/$arquivo.jpg") ?>">')
        </script>
        <?php
        echo "</a>";
        ?>
    </div>
	<div id="faleconosco" align="center">
		CeBusca &copy; Copyright 2017<br> Contato: Vicente
		Paulo Maciel<br>Fone: (31) 9-8596-2524<br>E-mail:
		suporte@cebusca.com.br
	</div>
</div>