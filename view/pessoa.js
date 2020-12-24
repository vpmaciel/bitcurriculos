<script>
window.onload = function(){
	
    retornar_elemento_id('pes_char_celular_numero').onkeyup = function(){
        mascara( this, telefone );
    },
    retornar_elemento_id('pes_date_data_nascimento').onkeyup = function(){
		mascara( this, data );
	}
}
</script>