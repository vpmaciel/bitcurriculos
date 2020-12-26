<?php
echo '<div class="linha">';
echo '<div class="coluna esquerda">';
echo '<a href="index.php">Home</a><br>';
echo '<a href="registro.php">Registrar</a><br>';
echo '<a href="login.php">Entrar</a><br>';
echo '<a href="logoff.php">Sair</a><br>-<br>';
echo '<a href="../controller/pessoa.php?acao=carregar">Dados Pessoais</a><br>';
echo '<a href="../view/curso_lista.php">Cursos</a><br>';
echo '<a href="../controller/certificacao.php">Certificação</a><br>';
echo '<a href="../controller/experiencia_profissional.php">Experiência Profissional</a><br>';
echo '<a href="../controller/objetivo_profissional.php">Objetivo Profissional</a><br>';
echo '<a href="../controller/../controller/idioma.php">Idiomas</a><br>';
echo '<a href="../controller/habilidade.php">Habilidades</a><br>';
echo '<a href="../controller/vagas.php">Pesquisar Vagas</a><br>';
echo '<a href="../controller/curriculo.php">Exibir Currículo</a><br>-<br>';
echo '<a href="../controller/publicar_vaga.php">Publicar Vaga de Emprego</a>';
echo '</div>';