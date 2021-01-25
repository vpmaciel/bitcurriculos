var cer_id = document.getElementById('cer_id');
var cer_certificacao = document.getElementById('cer_certificacao');
var cer_instituicao = document.getElementById('cer_instituicao');
var cer_ano_obtencao = document.getElementById('cer_ano_obtencao');
var botao_salvar = document.getElementById("btn_salvar");

botao_salvar.addEventListener("click", function(event) {
    event.preventDefault();    
    if (isNaN(cer_ano_obtencao.value)){
        document.getElementById('msg_cer_ano_obtencao').textContent = ' Digite um Ano de Obtenção de 1900 a 3000 !';
        return;
    }
    if (cer_ano_obtencao.value < 1900 || cer_ano_obtencao.value > 3000) {
        document.getElementById('msg_cer_ano_obtencao').textContent = ' Digite um Ano de Obtenção de 1900 a 3000 !';
        return;
    } 
    alert(cer_certificacao.value.length);
    if (cer_certificacao.value.length > 50){
        alert("oi");
        document.getElementById('msg_cer_certificacao').textContent = ' O campo Certificação não pode ter mais que 50 caracteres !';
        return;
    }
    if (cer_instituicao.value.length > 50){
        document.getElementById('msg_cer_instituicao').textContent = ' O campo Instituição não pode ter mais que 50 caracteres !';
        return;
    }
});