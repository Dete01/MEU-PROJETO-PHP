var cpfCompleto = document.getElementById('cpf');

cpf.addEventListener('blur', function(){
    var expCpf = /(\d{3})(\d{3})(\d{3})(\d{2})/g;
    var cpfValido = expCpf.exec(cpfCompleto.value);
    var msgCpf = '';

    if(!cpfValido){
        msgCpf = 'Digite apenas números. Sem pontos ou traços';
        alert(msgCpf);
        console.log(msgCpf);
    }

    /*var cpfComPontos = cpfCompleto.value.replace(expCpf,
        function( valorRegex, argumento1, argumento2, argumento3, argumento4 ) {
           return argumento1 + '.' + argumento2 + '.' + argumento3 + '-' + argumento4;
   })*/
   
   cpfCompleto.setCustomValidity(msgCpf);
   //cpf.value = cpfComPontos; 
   
})