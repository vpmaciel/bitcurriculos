function confirmar(){ 
  return confirm('Confirmar ação ?');
}

function getTamanhoTela() {
  var w = window.innerWidth
  || document.documentElement.clientWidth
  || document.body.clientWidth;
  
  var h = window.innerHeight
  || document.documentElement.clientHeight
  || document.body.clientHeight;
  
  var x = document.getElementById("demo");
  x.innerHTML = "Browser inner window width: " + w + ", height: " + h + ".";  
}

function mascara(o,f){
  v_obj=o
  v_fun=f
  executar_mascara();
}
function executar_mascara(){
  v_obj.value=v_fun(v_obj.value)
}
function mascara_telefone(v){
  v=v.replace(/\D/g,"");             // Remove tudo o que não é dígito
  v=v.replace(/(\d{2})(\d{5})(\d{4})$/,"$1-$2-$3");    // Coloca hífen
  return v;
}
function retornar_elemento_id( el ){
  return document.getElementById( el );
}