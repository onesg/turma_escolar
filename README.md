## PROJETO DE LARAVEL ##
##### DISCIPLINA: DESENVOLVIMENTO PARA SERVIDORES II #####
##### PROFESSOR: JORGE LUÍS GREGÓRIO #####
##### ALUNO: GABRIEL POSSAR SENO #####
---
#### COMO SALVAR E EXECUTAR O PROJETO: ####
 - Dentro da pasta onde deseja salvar o projeto, inicie o git com `git init`.
 - Clone o projeto com o comando: `git clone https://github.com/onesg/turma_escolar.git`.
 - Abra o projeto pelo VSCODE.
 - Use o atalho do teclado `Ctrl+J` para abrir o terminal.
 - Instale as dependências e o framework com o comando: `composer install --no-scripts`.
 - Copie o arquivo `.env.example` com o comando: `cp .env.example .env`.
 - Crie uma nova chave para a aplicação com o comando: `php artisan key:generate`.
 - Em seguida você deve configurar o banco de dados e o arquivo `.env`.
 - Agora rode as migrations com: `php artisan migrate --seed`.
 - Inicie o projeto com o comando: `php artisan serve`.
 - O projeto está pronto ;)
---
##### STATUS DO PROJETO: #####
 - [ ] Controle de acesso (página de login)
 - [ ] Página principal
 - [x] CRUD das Turmas
 - [x] CRUD dos Alunos
 - [x] Relacionamento 1:N (1 turma possui N alunos)
 - [x] Layout com bootstrap
 - [ ] Paginação
 - [ ] Relatórios (opcional)
---
#### Bugs encontrados e correções ####
 - [x] Os dados estão sendo salvos no banco quando clica em cancelar na tela de edição.
