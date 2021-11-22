var li = document.getElementsByClassName('nav-item');   //  PEGANDO TODOS OS ITENS DA NAV
var url_atual = window.location.href;   //  PEGANDO A URL ATUAL

if(url_atual.startsWith('http://127.0.0.1:8000/home')){
    li[0].setAttribute('class','nav-item active');  //  ATIVANDO NAV NO INICIO
}else if(url_atual.startsWith('http://127.0.0.1:8000/turma')){
    li[1].setAttribute('class','nav-item active');  //  ATIVANDO NAV NAS TURMAS
}else if(url_atual.startsWith('http://127.0.0.1:8000/aluno')){
    li[2].setAttribute('class','nav-item active');  //  ATIVANDO NAV NOS ALUNOS
}

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
