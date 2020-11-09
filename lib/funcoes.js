function confirmar(){ 
  // retorna true se confirmado, ou false se cancelado
  return confirm('Confirmar ação ?');
}

function validarSenha(){ 
  var senha = getElementById("senha").value;
  var senhaRepetida = getElementById("repetir_senha").value;
  alert(senha);
  alert(senhaRepetida);
  if (senha != senhaRepetida){
    alert("Os campos senha e repetir senha devem ser iguais !");
    document.formulario.repetir_senha.focus();	
    return false;
  }
  return true;
}