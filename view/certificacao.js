var cer_id = document.getElementById('cer_id').value;
var cer_certificacao = document.getElementById('cer_certificacao').value;
var cer_instituicao = document.getElementById('cer_instituicao').value;
var cer_ano_obtencao = document.getElementById('cer_ano_obtencao').value;


function validar_form(){
    document.getElementById('cer_id').innerHTML=Date();
    document.getElementById('cer_certificacao').innerHTML=Date();
    document.getElementById('cer_instituicao').innerHTML=Date();
    document.getElementById('cer_ano_obtencao').innerHTML=Date();
    return false;
    if (isNaN(cer_ano_obtencao)){
        alert("oi");
        return false;
    }else{
      return true;
    }
}