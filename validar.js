function validar(){
    if (document.cadastro.f_nome.value == ""){
        alert("Digite o nome");
        document.getElementById("f_inome").focus();
        return false;
    }
    if (document.cadastro.f_senha.value == "") {
        alert("Digite a senha");
        document.getElementById("f_isenha").focus();
        return false;
    }
    if (document.cadastro.f_tel.value == "") {
        alert("Digite seu número");
        document.getElementById("f_iphone").focus();
        return false;
    }
    if (document.cadastro.f_cpf.value == "") {
        alert("Digite seu cpf");
        document.getElementById("f_icpf").focus();
        return false;
    }
        var data = new Date();
        var dt = new Array;
        var aux = document.cadastro.f_data.value;
        dt = aux.split("/");

        if( ((dt[0] < 1)||(dt[0] > 31)) || ((dt[1] < 1)||(dt[1] > 12)) || ((dt[2] < dt.getFullYear()-150)||(dt[2] > dt.getFullYear())) ){
			alert("Digite uma data válida");
			document.getElementById("f_idata").focus();
			return false;

            
               /*   Na validação da data temos uma verificação mais complexa,
                    vamos verificar o valor do dia, do mês e do ano, se estes
                    estiverem em conformidade passamos para frente, se não, emitimos a 
                    mensagem, posicionamos o cursor no campo e interrompemos o envio do
                    formulário.
                */
		}
        var emaill=document.cadastro.f_email.value;
        if (emaill.search("@")==-1) {
            alert('Digite um e-mail válido');
            document.getElementById("f_iemail").focus();
            return false;
        }
    
}