var input = $('.valor')
input.maskMoney(
    {
       prefix: 'R$ ',
       allowNegative: true,
       thousands:'.',
       decimal: ',',
       affixesStay: false 
    }
)