
$('#tipo_pessoa').on('change', function(){
    tipoPessoa = $(this).val();
    console.log(tipoPessoa)
    if(tipoPessoa == 'PF'){
        $('#cgc').mask('999.999.999-99')
    }else{
        $('#cgc').mask('99.999.999/9999-99')
    }
})
