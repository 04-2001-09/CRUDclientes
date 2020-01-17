let $ = document.querySelector.bind(document);

function validacao() {
    $("#cadastrar").addEventListener("click", () => {
        //event.preventDefault();
        
        let erros = [];
        if (!$("#nome").value) {
            erros.push({ text: "Necessário nome" });
        }
        if (!$("#sobrenome").value) {
            erros.push({ text: "Necessário sobrenome" });
        }
        if (!$("#email").value) {
            erros.push({ text: "Necessário email" });
        }
        if (!$("#cep").value) {
            erros.push({ text: "Necessário cep" });
        }
        if (!$("#tipoEnd").value) {
            erros.push({ text: "Necessário tipo de endereço" });
        }
        if (!$("#nomeRua").value) {
            erros.push({ text: "Necessário nome da rua" });
        }
        if (!$("#numero").value) {
            erros.push({ text: "Necessário numero" });
        }
        if (!$("#bairro").value) {
            erros.push({ text: "Necessário bairro" });
        }
        if (!$("#senha").value) {
            erros.push({ text: "Necessário senha" });
        }
        if (!$("#confirmaSenha").value) {
            erros.push({ text: "Necessário confirmação da senha" });
        }
        if ($("#senha").value != $("#confirmaSenha").value) {
            erros.push({ text: "Senhas não coencidem" });
        }

        if (erros.length > 0) {
            $("#mensagem").innerHTML = " ";
            erros.forEach((erro) => {
                let div = document.createElement('div');
                let text = document.createTextNode(erro.text);
                div.setAttribute("class", "alert alert-danger");
                div.appendChild(text);
                $("#mensagem").appendChild(div);
            });
        }
        window.location.href='./app/controller/cadastro.php';
    });



}