var cer_id = document.getElementById('cer_id').value;
var cer_certificacao = document.getElementById('cer_certificacao').value;
var cer_instituicao = document.getElementById('cer_instituicao').value;
var cer_ano_obtencao = document.getElementById('cer_ano_obtencao').value;


function validar_form(){    
    document.getElementById('msg_certificacao').innerHTML=Date();
    document.getElementById('msg_instituicao').innerHTML=Date();
    document.getElementById('msg_ano_obtencao').innerHTML=Date();
    
    if (isNaN(cer_ano_obtencao)){
        alert('Digite um Ano de Obtenção válido !');
        return false;
    }
    if (cer_ano_obtencao < 1900 || cer_ano_obtencao > 3000) {
        alert('Digite um Ano de Obtenção de 1900 a 3000 !');
        return false;
    } 
    if (cer_certificacao.length > 50){
        alert('Digite um Ano de Obtenção válido !');
        return false;
    }
    if (cer_instituicao.length > 50){
        alert('Digite um Ano de Obtenção válido !');
        return false;
    }

    return true;
}

