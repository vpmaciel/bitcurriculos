<?php
echo '<div class="linha">';
echo '<div class="coluna esquerda">';

$TABELA = '<table align="center" class="menu">';
echo $TABELA;

echo $TR . $TD . $LABEL . '<a href="index.php">Home</a><br>' . $LABEL_; 
echo $TR . $TD . $LABEL . '<a href="registro.php">Registrar</a><br>' . $LABEL_; 
echo $TR . $TD . $LABEL . '<a href="login.php">Entrar</a><br>' . $LABEL_; 
echo $TR . $TD . $LABEL . '<a href="logoff.php">Sair</a><br>' . $LABEL_; 
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_; 
echo $TR . $TD . $LABEL . '<a href="../controller/pessoa.php?acao=carregar">Dados Pessoais</a><br>' . $LABEL_; 
echo $TR . $TD . $LABEL . '<a href="../view/curso_lista.php">Cursos</a><br>' . $LABEL_; 
echo $TR . $TD . $LABEL . '<a href="../view/certificacao_lista.php">Certificação</a><br>' . $LABEL_; 
echo $TR . $TD . $LABEL . '<a href="../view/experiencia_profissional_lista.php">Experiência Profissional</a><br>' . $LABEL_; 
echo $TR . $TD . $LABEL . '<a href="../view/objetivo_profissional_lista.php">Objetivo Profissional</a><br>' . $LABEL_; 
echo $TR . $TD . $LABEL . '<a href="../view/idioma_lista.php">Idiomas</a><br>' . $LABEL_; 
echo $TR . $TD . $LABEL . '<a href="../view/habilidade_lista.php">Habilidades</a><br>' . $LABEL_; 
echo $TR . $TD . $LABEL . '<a href="../view/vagas.php">Pesquisar Vagas</a><br>' . $LABEL_; 
echo $TR . $TD . $LABEL . '<a href="../view/curriculo.php">Exibir Currículo</a><br>' . $LABEL_; 
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_; 
echo $TR . $TD . $LABEL . '<a href="../view/publica_vaga_lista.php">Publicar Vaga de Emprego</a>' . $LABEL_; 

echo $TABLE_;
echo '</div>';