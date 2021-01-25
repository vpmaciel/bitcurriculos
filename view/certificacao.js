var cer_id = document.getElementById('cer_id');
var cer_certificacao = document.getElementById('cer_certificacao');
var cer_instituicao = document.getElementById('cer_instituicao');
var cer_ano_obtencao = document.getElementById('cer_ano_obtencao');
var botao_salvar = document.getElementById('btn_salvar');
botao_salvar.addEventListener("click", function(event) {
    event.preventDefault();
    var campos_validos = true;
    if (isNaN(cer_ano_obtencao.value) || cer_ano_obtencao.value < 1900 || cer_ano_obtencao.value > 3000) {
        document.getElementById('msg_cer_ano_obtencao').textContent = ' * O campo Ano de obtenção é obrigatório e deve estar entre de 1900 a 3000 !';
        campos_validos = false;
    }     
    if (cer_certificacao.value.length == 0 || cer_certificacao.value.length > 50){        
        document.getElementById('msg_cer_certificacao').textContent = ' * O campo Certificação é obrigatório e não pode ter mais que 50 caracteres !';
        campos_validos = false;
    }
    if (cer_instituicao.value.length == 0 || cer_instituicao.value.length > 50){
        document.getElementById('msg_cer_instituicao').textContent = ' * O campo Instituição é obrigatório e não pode ter mais que 50 caracteres !';
        campos_validos = false;
    }    

    if(!campos_validos) {
        return;
    }
});