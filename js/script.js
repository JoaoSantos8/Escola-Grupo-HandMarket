$("#mostrarPass").click(function() {
    if ($("#inputPass").attr("type") === "password") {
        $("#inputPass").attr("type", "text");
    } else {
        $("#inputPass").attr("type", "password");
    }

});

$("#confirmar").click(function(event) {
    var nome = $("#inputNome").val();
    var email = $("#inputEmail").val();
    var telefone = $("#inputTelefone").val();
    var senha = $("#inputPass").val();

    var nomeValido = validarNome(nome);
    var emailValido = validarEmail(email);
    var telefoneValido = validarTelefone(telefone);
    var senhaValida = validarSenha(senha);

    if (nomeValido && emailValido && telefoneValido && senhaValida) {
        $("#form").submit();
    } else {
        event.preventDefault();
    }
});

function validarNome(nome) {
    if (nome.indexOf(' ') !== -1 || nome.length < 5) {
        alert("O nome não pode conter espaços e deve ter pelo menos 5 caracteres.");
        $("#inputNome").css("border", "5px solid red");
        return false;
    } else {
        $("#inputNome").css("border", "5px solid green");
        return true;
    }
}

function validarEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Formato de e-mail inválido.");
        $("#inputEmail").css("border", "5px solid red");
        return false;
    } else {
        $("#inputEmail").css("border", "5px solid green");
        return true;
    }
}

function validarTelefone(telefone) {
    if (telefone.length < 9) {
        alert("Número de telefone inválido. Deve ter pelo menos 9 dígitos.");
        $("#inputTelefone").css("border", "5px solid red");
        return false;
    } else {
        $("#inputTelefone").css("border", "5px solid green");
        return true;
    }
}

function validarSenha(senha) {
    var comprimentoMinimo = 8;
    var possuiCaracterEspecial = /[!@#$%^&*(),.?":{}|<>]/.test(senha);
    var possuiNumero = /\d/.test(senha);
    var possuiMaiuscula = /[A-Z]/.test(senha);
    var possuiMinuscula = /[a-z]/.test(senha);

    if (senha.length < comprimentoMinimo) {
        alert("A senha deve ter pelo menos " + comprimentoMinimo + " caracteres.");
        $("#inputPass").css("border", "5px solid red");
        return false;
    } else if (!possuiCaracterEspecial) {
        alert("A senha deve conter pelo menos um caracter especial.");
        $("#inputPass").css("border", "5px solid red");
        return false;
    } else if (!possuiNumero) {
        alert("A senha deve conter pelo menos um número.");
        $("#inputPass").css("border", "5px solid red");
        return false;
    } else if (!possuiMaiuscula) {
        alert("A senha deve conter pelo menos uma letra maiúscula.");
        $("#inputPass").css("border", "5px solid red");
        return false;
    } else if (!possuiMinuscula) {
        alert("A senha deve conter pelo menos uma letra minúscula.");
        $("#inputPass").css("border", "5px solid red");
        return false;
    } else {
        $("#inputPass").css("border", "5px solid green");
        return true;
    }
}

