function confirmar(){ 
  // retorna true se confirmado, ou false se cancelado
  return confirm('Confirmar ação ?');
}

function validarSenha(form){ 
  senha = document.formulario.senha.value
  senhaRepetida = document.formulario.repetir_senha.value
  if (senha != senhaRepetida){
    alert("Repita a senha corretamente");
    document.formulario.repetir_senha.focus();	
    return false;
  }
}