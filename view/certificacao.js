var cer_id = document.getElementById('cer_id');
var cer_certificacao = document.getElementById('cer_certificacao');
var cer_instituicao = document.getElementById('cer_instituicao');
var cer_ano_obtencao = document.getElementById('cer_ano_obtencao');
var botao_salvar = document.querySelector("#salvar");


botao_salvar.addEventListener("click", function(event) {
    event.preventDefault();
    var validado = true;
    if (isNaN(cer_ano_obtencao.value)){
        document.getElementById('msg_ano_obtencao').innerHTML = ' Digite um Ano de Obtenção de 1900 a 3000 !';
        validado = false;
    }
    if (cer_ano_obtencao.value < 1900 || cer_ano_obtencao.value > 3000) {
        document.getElementById('msg_ano_obtencao').innerHTML = ' Digite um Ano de Obtenção de 1900 a 3000 !';
        validado = false;
    } 
    if (cer_certificacao.value.length > 50){
        document.getElementById('msg_certificacao').innerHTML = ' O campo Certificação não pode ter mais que 50 caracteres !';
        validado = false;
    }
    if (cer_instituicao.value.length > 50){
        document.getElementById('msg_instituicao').textContent = ' O campo Instituição não pode ter mais que 50 caracteres !';
        validado = false;
    }
    
    if(validado == false) {        
        return;
    } else {
        return true;
    }

    
}

