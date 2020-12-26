<?php
echo '<div class="linha">';
echo '<div class="coluna esquerda">';
echo '<a href="index.php">Home</a><br>';
echo '<a href="registro.php">Registrar</a><br>';
echo '<a href="login.php">Entrar</a><br>';
echo '<a href="logoff.php">Sair</a><br>-<br>';
echo '<a href="../controller/pessoa.php?acao=carregar">Dados Pessoais</a><br>';
echo '<a href="../controller/curso.php?acao=carregar">Cursos</a><br>';
echo '<a href="../controller/certificacao.php?acao=carregar">Certificação</a><br>';
echo '<a href="../controller/experiencia_profissional.php?acao=carregar">Experiência Profissional</a><br>';
echo '<a href="../controller/objetivo_profissional.php?acao=carregar">Objetivo Profissional</a><br>';
echo '<a href="../controller/../controller/idioma.php?acao=carregar">Idiomas</a><br>';
echo '<a href="../controller/habilidade.php?acao=carregar">Habilidades</a><br>';
echo '<a href="../controller/vagas.php?acao=carregar">Pesquisar Vagas</a><br>';
echo '<a href="../controller/curriculo.php?acao=carregar">Exibir Currículo</a><br>-<br>';
echo '<a href="../controller/publicar_vaga.php?acao=carregar">Publicar Vaga de Emprego</a>';
echo '</div>';