function acessar() {
    if (document.login.f_nome.value == ""){
        alert("Digite um email válido");
        document.getElementById("i_email").focus();
        return false;
    }
    if (document.login.f_senha.value == "") {
        alert("Digite uma senha válida");
        document.getElementById("f_isenha").focus();
        return false;
    }

}
