<?php

//* Função para validar o nome da chave que está sendo cadastrada. *//
function ValidarNome($nome) {
    if (preg_match('/^(?!^\d|.*\s$)[A-Za-zÀ-ú0-9-()º]+[^.,:;$%#@*]+$/', $_POST['nome'])) {
        return true; // O nome da chave é válido.
    } else {
        return false; // O nome da chave não é válido.
    }
}

//* Função para validar o nome da pessoa que está retirando a chave. *//
function ValidarPessoa($pessoa) {
    if (preg_match('/^(?! )(?![\s\S]* $)[A-Za-zÀ-ú ]*$/', $_POST['pessoa'])) {
        return true; // O nome da pessoa é válido.
    } else {
        return false; // O nome da pessoa é inválido.
    }
}