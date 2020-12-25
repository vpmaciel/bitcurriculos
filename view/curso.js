<script>
window.onload = function(){
	
    retornar_elemento_id('cur_year_ano_inicio').onkeyup = function(){
        mascara( this, ano );
    },
    retornar_elemento_id('cur_year_ano_conclusao').onkeyup = function(){
		mascara( this, ano );
	}
}
</script>