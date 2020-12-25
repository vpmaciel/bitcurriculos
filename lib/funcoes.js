function confirmar(){ 
  return confirm('Confirmar ação ?');
}

function retornar_tamanho_tela() {
  var w = window.innerWidth
  || document.documentElement.clientWidth
  || document.body.clientWidth;
  
  var h = window.innerHeight
  || document.documentElement.clientHeight
  || document.body.clientHeight;
  
  var x = document.getElementById("demo");
  x.innerHTML = "Browser inner window width: " + w + ", height: " + h + ".";  
}
function telefone(v){
  v=v.replace(/\D/g,"");             // Remove tudo o que não é dígito
  v=v.replace(/(\d{2})(\d{5})(\d{4})$/,"$1-$2-$3");    // Coloca hífen
  return v;
}
function data(v){
  v=v.replace(/\D/g,"");             // Remove tudo o que não é dígito
  v=v.replace(/(\d{2})(\d{2})(\d{4})$/,"$1-$2-$3");    // Coloca hífen
  return v;
}
function ano(v){
  v=v.replace(/\D/g,"");             // Remove tudo o que não é dígito
  v=v.replace(/(\d{4})$/,"$1");    // Coloca hífen
  return v;
}
function mascara(o,f){
  v_obj=o
  v_fun=f
  executar_mascara();
}
function executar_mascara(){
  v_obj.value=v_fun(v_obj.value)
}
function retornar_elemento_id( el ){
  return document.getElementById( el );
}