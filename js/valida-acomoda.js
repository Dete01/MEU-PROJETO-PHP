// Valida Nome
var nomeCompleto = document.getElementById('nomeacomod');

nomeCompleto.addEventListener('blur', function(){
    var expNome = /^([^0-9]){3,50}$/g;
    var nomeValido = expNome.exec(nomeCompleto.value);
    console.log(nomeValido);
    var msgNome = '';
    
    if(nomeValido === null){
        msgNome = 'Digite o nome da acomodação';
    }

    nomeCompleto.setCustomValidity(msgNome);
    

})


//Valida Data de Nascimento

var dataNascimento = document.querySelector('#nascimento');

dataNascimento.addEventListener('blur', (evento)=>{
    validaDataNascimento(evento.target);
})

function validaDataNascimento(input){
    var dataRecebida = new Date(input.value);
    console.log(dataRecebida);
    var dataHoje = new Date();
    console.log(dataHoje);
    var dataMaior16 = new Date(dataRecebida.getFullYear() + 16, dataRecebida.getMonth(), dataRecebida.getDay());
    console.log(dataMaior16);
    var msgNascimento = '';

    if(dataMaior16 >= dataHoje){
        msgNascimento = 'Você precisa ser maior de 16 anos.';
        console.log(dataMaior16 <= dataHoje);
    }

    input.setCustomValidity(msgNascimento);

}




//Termos de Privacidade
var termoPriv = document.querySelector('#termos');

//Botão de Envio sem termo exibe caixa de alerta
var btnEnviar = document.querySelector('#enviar');

btnEnviar.addEventListener('click',function(){
    exibeAlertaTermo();
})

function exibeAlertaTermo() {
    if(!termoPriv.checked && senha.validity.valid){
        alert('Você precisa aceitar os Termos de Privacidade, antes de prosseguir.');
    }
}

//Mostra Senha

var verSenha = document.querySelector('#versenha');
var senha = {
    senha1: document.querySelector('#senha1'),
    senha2: document.querySelector('#senha2')
}

verSenha.addEventListener('change',(evento)=>{
    mostraSenha(evento.target);
})

function mostraSenha(input) {
   if(input.checked){
       senha.senha1.type = 'text';
       senha.senha2.type = 'text'; 
   }else{
       senha.senha1.type = 'password';
       senha.senha2.type = 'password';
   }    
}
